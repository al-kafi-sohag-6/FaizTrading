@if ($is_variant)
    @forelse($product->variations as $variant)
        <div class="col-md-3 col-xs-4 product_list no-print">

            <div class="variation_box product_box" title="{{ $product->name }}" id="product_{{ $product->id }}" data-variation_id="{{ $variant->id }}">
                <div class="image-container" style="background-image: url(
     @if (count($product->media) > 0) {{ $product->media->first()->display_url }}
					@elseif(!empty($product->image))
						{{ asset('/uploads/img/' . rawurlencode($product->image)) }}
					@else
						{{ asset('/img/default.png') }} @endif
    );
   background-repeat: no-repeat; background-position: center;
   background-size: contain;">

                </div>
                <div class="text_div">
                    <small class="text text-muted">{{ $variant->name.' ('.$variant->product_variation->name.')' }}</small>
                </div>

            </div>
        </div>

        
    @empty
        <input type="hidden" id="no_products_found">
        <div class="col-md-12">
            <h4 class="text-center">
                @lang('lang_v1.no_products_to_display')
            </h4>
        </div>
    @endforelse
@else
    @forelse($products as $product)
        <div class="col-md-3 col-xs-4 product_list no-print">

            <div class="product_box" data-target="#variationlist_{{ $product->id }}" title="{{ $product->name }}" id="product_{{ $product->id }}" data-product_id="{{ $product->id }}">
                <div class="image-container" style="background-image: url(
     @if (count($product->media) > 0) {{ $product->media->first()->display_url }}
					@elseif(!empty($product->image))
						{{ asset('/uploads/img/' . rawurlencode($product->image)) }}
					@else
						{{ asset('/img/default.png') }} @endif
    );
   background-repeat: no-repeat; background-position: center;
   background-size: contain;">

                </div>
                <div class="text_div">
                    <small class="text text-muted">{{ $product->name }}</small>
                </div>

            </div>
        </div>

        <div class="modal fade" id="variationlist_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @include('sale_pos.partials.variants_view_modal');
        </div>
    @empty
        <input type="hidden" id="no_products_found">
        <div class="col-md-12">
            <h4 class="text-center">
                @lang('lang_v1.no_products_to_display')
            </h4>
        </div>
    @endforelse

@endif

{{-- @forelse($products as $product)
	<div class="col-md-3 col-xs-4 product_list no-print">
		<div class="product_box" data-variation_id="{{$product->id}}" title="{{$product->name}} @if ($product->type == 'variable')- {{$product->variation}} @endif {{ '(' . $product->sub_sku . ')'}} @if (!empty($show_prices)) @lang('lang_v1.default') - @format_currency($product->selling_price) @foreach ($product->group_prices as $group_price) @if (array_key_exists($group_price->price_group_id, $allowed_group_prices)) {{$allowed_group_prices[$group_price->price_group_id]}} - @format_currency($group_price->price_inc_tax) @endif @endforeach @endif">

		<div class="image-container" 
			style="background-image: url(
					@if (count($product->media) > 0)
						{{$product->media->first()->display_url}}
					@elseif(!empty($product->product_image))
						{{asset('/uploads/img/' . rawurlencode($product->product_image))}}
					@else
						{{asset('/img/default.png')}}
					@endif
				);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">
			
		</div>

		<div class="text_div">
			<small class="text text-muted">{{$product->name}} 
			@if ($product->type == 'variable')
				- {{$product->variation}}
			@endif
			</small>

			<small class="text-muted">
				({{$product->sub_sku}})
			</small>
		</div>
			
		</div>
	</div>
@empty
	<input type="hidden" id="no_products_found">
	<div class="col-md-12">
		<h4 class="text-center">
			@lang('lang_v1.no_products_to_display')
		</h4>
	</div>
@endforelse --}}
