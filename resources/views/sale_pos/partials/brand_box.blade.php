
@if(!empty($brands))
	<div class="col-md-3 col-xs-4 product_list no-print">
		<div class="brand_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="" title="All Brands"
			style="background-image: url(
			        {{asset('/img/default.png')}}
				);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

		<div class="image-container" >
			
		</div>

		<div class="text_div">
			<small class="text text-muted">
			    All Brands
			</small>
			<small class="text text-muted">
			    &nbsp
			</small>
		</div>
			
		</div>
	</div>
@foreach($brands as $brand)
	<div class="col-md-3 col-xs-4 product_list no-print">
		<div class="brand_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="{{$brand->id}}" title="{{$brand['name']}}"
			style="background-image: url(
			    @if($brand['brand_logo'])
					{{ asset($brand['brand_logo']) }}
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
			    {{ $brand['name'] }}
			</small>
			<small class="text text-muted">
			    &nbsp
			</small>
		</div>
			
		</div>
	</div>
@endforeach
@endif