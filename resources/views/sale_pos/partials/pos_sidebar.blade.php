
<div class="row">
    <input type="hidden" name="scrool_cond" id="scrool_cond" value="0">
	@if(!empty($categories))
	<div class="col-sm-4 p-0" id="category_div">
		<button type="button" class="btn btn-info btn-flat"  style="width:25%" id="previous_categories" data-category="0" data-subcategory="0"><i class="fa fa-arrow-left"></i></button>
		<button type="button" class="btn btn-primary btn-flat" style="width:70%" id="show_categories">Categories</button>
	</div>
	@endif

	@if(!empty($brands))
	<div class="col-sm-4" id="brand_div">
		<button type="button" class="btn btn-primary btn-flat w-100" id="show_brands">Brands</button>
	</div>
	@endif

	<!-- used in repair : filter for service/product -->
	<div class="col-md-6 hide" id="product_service_div">
		{!! Form::select('is_enabled_stock', ['' => __('messages.all'), 'product' => __('sale.product'), 'service' => __('lang_v1.service')], null, ['id' => 'is_enabled_stock', 'class' => 'select2', 'name' => null, 'style' => 'width:100% !important']) !!}
	</div>

	<div class="col-sm-4 @if(empty($featured_products)) hide @endif" id="feature_product_div">
		<button type="button" class="btn btn-primary btn-flat" id="show_featured_products">@lang('lang_v1.featured_products')</button>
	</div>
</div>
<br>
<div class="row custom-scroll" id="featured_products_box" style="display: none;">
	<div class="col-md-12">
    @if(!empty($featured_products))
    	@include('sale_pos.partials.featured_products')
    @endif
    </div>
    <br>
    <br>
</div>
<div class="row custom-scroll" id="category_box" style="display: none;">
	<div class="col-md-12">
        @include('sale_pos.partials.category_box')
    </div>
    <br>
    <br>
</div>
<div class="row custom-scroll" id="variation_box" style="display: none;">
	<div class="col-md-12">
		<div class="eq-height-row" id="variation_list_body"></div>
	</div>
    <br>
    <br>
</div>
<div class="row custom-scroll" id="sub_category_box" style="display: none;">
	<div class="col-md-12">
        @include('sale_pos.partials.sub_category_box')
    </div>
    <br>
    <br>
</div>
<div class="row custom-scroll" id="brand_box" style="display: none;">
	<div class="col-md-12">
        @include('sale_pos.partials.brand_box')
    </div>
    <br>
    <br>
</div>

<div class="row" id="filtered_products">
	<input type="hidden" id="suggestion_page" value="1">
	<div class="col-md-12">
		<div class="eq-height-row" id="product_list_body"></div>
	</div>
	<div class="col-md-12 text-center" id="suggestion_page_loader" style="display: none;">
		<i class="fa fa-spinner fa-spin fa-2x"></i>
	</div>
</div>