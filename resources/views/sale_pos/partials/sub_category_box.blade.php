@if(!empty($categories))
@foreach($categories as $category)
@if(!empty($category['sub_categories']))
	@foreach($category['sub_categories'] as $sc)
	<div>
		<div class="col-md-3 col-xs-3 product_list no-print sub_category_items" data-category_id="{{ $category['id'] }}" >
		    <div class="sub_category_box" data-toggle="tooltip" data-placement="bottom"data-variation_id="{{$sc['id']}}" data-category_id="{{ $category['id'] }}"  title="{{$sc['name']}}"
			    style="background-image: url(
			    @if($sc['category_image'] != null)
					{{ asset($sc['category_image']) }}
				@else
					{{asset('/img/default.png')}}
				@endif
				);
			    background-repeat: no-repeat; background-position: center;
			    background-size: contain;">

		    <div class="image-container" >
			
		    </div>

		    <div class="text_div">
			    <small class="text text-muted">
			        {{ $category['name'] }} <br>
			    </small>
			    <small class="text text-muted">
			        {{ $sc['name'] }}
			    </small>
		    </div>
			
		    </div>
	    </div>
	</div>
    @endforeach
@endif
@endforeach
@endif