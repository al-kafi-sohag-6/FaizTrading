@if(!empty($categories))
	<div class="col-md-3 col-xs-4 product_list no-print">
		<div class="category_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="" title="All Categories" 
			style="background-image: url(
				    {{asset('/img/default.png')}}
				);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

		<div class="image-container">
			
		</div>

		<div class="text_div">
			<small class="text text-muted">
			    All Categories
			</small>
			<small class="text text-muted">
			    &nbsp
			</small>
		</div>
			
		</div>
	</div>
@foreach($categories as $category)
	<div class="col-md-3 col-xs-4 product_list no-print">
		<div class="category_box" data-toggle="tooltip" data-placement="bottom" @if(!empty($category['sub_categories']))data-subcategories= true @endif data-variation_id="{{$category['id']}}" title="{{$category['name']}}" 
			style="background-image: url(
			    @if($category['category_image'] != null)
					{{ asset($category['category_image']) }}
				@else
					{{asset('/img/default.png')}}
				@endif
				);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

		<div class="image-container">
			
		</div>

		<div class="text_div">
			<small class="text text-muted">
			    {{ $category['name'] }}
			</small>
			<small class="text text-muted">
			    &nbsp
			</small>
		</div>
			
		</div>
	</div>

@endforeach
@endif