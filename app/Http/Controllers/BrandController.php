<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Utils\ModuleUtil;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    /**
     * All Utils instance.
     *
     */
    protected $moduleUtil;

    /**
     * Constructor
     *
     * @param ProductUtils $product
     * @return void
     */
    public function __construct(ModuleUtil $moduleUtil)
    {
        $this->moduleUtil = $moduleUtil;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('brand.view') && !auth()->user()->can('brand.create')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            $business_id = request()->session()->get('user.business_id');

            $brands = Brands::where('business_id', $business_id)
                        ->select(['name', 'description', 'id', 'brand_logo']);

            return Datatables::of($brands)               
                ->addColumn(
                    'image',
                    '
                    @if($brand_logo != null)
                        <img src="{{ $brand_logo }}"  style="height:50px; width:50px; object-fit:contain;">
                    @else
                        Not uploaded yet
                    @endif
                    '
                )
                ->addColumn(
                    'action',
                    '@can("brand.update")
                    <button data-href="{{action(\'BrandController@edit\', [$id])}}" class="btn btn-xs btn-primary edit_brand_button"><i class="glyphicon glyphicon-edit"></i> @lang("messages.edit")</button>
                        &nbsp;
                    @endcan
                    @can("brand.delete")
                        <button data-href="{{action(\'BrandController@destroy\', [$id])}}" class="btn btn-xs btn-danger delete_brand_button"><i class="glyphicon glyphicon-trash"></i> @lang("messages.delete")</button>
                    @endcan'
                ) 
                ->removeColumn('id', 'brand_logo')
                ->rawColumns([2,3])
                ->make(false);
        }

        return view('brand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('brand.create')) {
            abort(403, 'Unauthorized action.');
        }

        $quick_add = false;
        if (!empty(request()->input('quick_add'))) {
            $quick_add = true;
        }

        $is_repair_installed = $this->moduleUtil->isModuleInstalled('Repair');

        return view('brand.create')
                ->with(compact('quick_add', 'is_repair_installed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('brand.create')) {
            abort(403, 'Unauthorized action.');
        }

        try {
            $input = $request->only(['name', 'description']);
            $business_id = $request->session()->get('user.business_id');
            $input['business_id'] = $business_id;
            $input['created_by'] = $request->session()->get('user.id');

            if ($this->moduleUtil->isModuleInstalled('Repair')) {
                $input['use_for_repair'] = !empty($request->input('use_for_repair')) ? 1 : 0;
            }

            $brand = Brands::create($input);
                        
            if ($request->file('brand_logo')) {
        		$file = $request->file('brand_logo');
        		$filename = $file->getClientOriginalName();
        		$filename = str_replace(' ', '_', $filename);
        		$file->move(public_path('uploads/brand/'.$brand->id),$filename);
        		$update = Brands::findOrFail($brand->id);
        		$update->brand_logo = 'uploads/brand/'.$brand->id.'/'.$filename;
        		$update->save();
        		
        	}
        	
            $output = ['success' => true,
                            'data' => $brand,
                            'msg' => __("brand.added_success")
                        ];
        } catch (\Exception $e) {
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            
            $output = ['success' => false,
                            'msg' => __("messages.something_went_wrong")
                        ];
        }

        return redirect()->back()->with('status', $output);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('brand.update')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            $business_id = request()->session()->get('user.business_id');
            $brand = Brands::where('business_id', $business_id)->find($id);

            $is_repair_installed = $this->moduleUtil->isModuleInstalled('Repair');

            return view('brand.edit')
                ->with(compact('brand', 'is_repair_installed'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->can('brand.update')) {
            abort(403, 'Unauthorized action.');
        }

        if (1==1) {
            try {
                $input = $request->only(['name', 'description']);
                $business_id = $request->session()->get('user.business_id');

                $brand = Brands::where('business_id', $business_id)->findOrFail($id);
                $brand->name = $input['name'];
                $brand->description = $input['description'];

                if ($this->moduleUtil->isModuleInstalled('Repair')) {
                    $brand->use_for_repair = !empty($request->input('use_for_repair')) ? 1 : 0;
                }
                
                $brand->save();
                
                if ($request->file('brand_logo')) {
                    if($brand->brand_logo != null){
            		  @unlink(public_path($brand->brand_logo)); 
            		}
                    
            		$file = $request->file('brand_logo');
            		$filename = $file->getClientOriginalName();
        		    $filename = str_replace(' ', '_', $filename);
            		$file->move(public_path('uploads/brand/'.$brand->id),$filename);
            		$update = Brands::findOrFail($brand->id);
            		$update->brand_logo = 'uploads/brand/'.$brand->id.'/'.$filename;
            		$update->save();
            		
            	}

                $output = ['success' => true,
                            'msg' => __("brand.updated_success")
                            ];
            } catch (\Exception $e) {
                \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            
                $output = ['success' => false,
                            'msg' => __("messages.something_went_wrong")
                        ];
            }

            return redirect()->back()->with('status', $output);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('brand.delete')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            try {
                $business_id = request()->user()->business_id;

                $brand = Brands::where('business_id', $business_id)->findOrFail($id);
                $brand->delete();

                $output = ['success' => true,
                            'msg' => __("brand.deleted_success")
                            ];
            } catch (\Exception $e) {
                \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            
                $output = ['success' => false,
                            'msg' => __("messages.something_went_wrong")
                        ];
            }

            return $output;
        }
    }

    public function getBrandsApi()
    {
        try {
            $api_token = request()->header('API-TOKEN');

            $api_settings = $this->moduleUtil->getApiSettings($api_token);
            
            $brands = Brands::where('business_id', $api_settings->business_id)
                                ->get();
        } catch (\Exception $e) {
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
        
            return $this->respondWentWrong($e);
        }

        return $this->respond($brands);
    }
}
