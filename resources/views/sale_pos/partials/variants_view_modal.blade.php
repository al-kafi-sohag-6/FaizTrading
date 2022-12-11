<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close no-print" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{ $product->name }}</h4>

        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-9">
                    <div class="col-sm-4 invoice-col">
                        <b>@lang('product.sku'):</b>
                        {{ $product->sku }}<br>
                        <b>@lang('product.brand'): </b>
                        {{ $product->brand->name ?? '--' }}<br>
                        <b>@lang('product.unit'): </b>
                        {{ $product->unit->short_name ?? '--' }}<br>
                        <b>@lang('product.barcode_type'): </b>
                        {{ $product->barcode_type ?? '--' }}
                        @php
                            $custom_labels = json_decode(session('business.custom_labels'), true);
                        @endphp
                        @if (!empty($product->product_custom_field1))
                            <br />
                            <b>{{ $custom_labels['product']['custom_field_1'] ?? __('lang_v1.product_custom_field1') }}: </b>
                            {{ $product->product_custom_field1 }}
                        @endif

                        @if (!empty($product->product_custom_field2))
                            <br />
                            <b>{{ $custom_labels['product']['custom_field_2'] ?? __('lang_v1.product_custom_field2') }}: </b>
                            {{ $product->product_custom_field2 }}
                        @endif

                        @if (!empty($product->product_custom_field3))
                            <br />
                            <b>{{ $custom_labels['product']['custom_field_3'] ?? __('lang_v1.product_custom_field3') }}: </b>
                            {{ $product->product_custom_field3 }}
                        @endif

                        @if (!empty($product->product_custom_field4))
                            <br />
                            <b>{{ $custom_labels['product']['custom_field_4'] ?? __('lang_v1.product_custom_field4') }}: </b>
                            {{ $product->product_custom_field4 }}
                        @endif
                        <br>
                        <strong>@lang('lang_v1.available_in_locations'):</strong>
                        @if (count($product->product_locations) > 0)
                            {{ implode(', ', $product->product_locations->pluck('name')->toArray()) }}
                        @else
                            @lang('lang_v1.none')
                        @endif
                        @if (!empty($product->media->first()))
                            <br>
                            <strong>@lang('lang_v1.product_brochure'):</strong>
                            <a href="{{ $product->media->first()->display_url }}" download="{{ $product->media->first()->display_name }}">
                                <span class="label label-info">
                                    <i class="fas fa-download"></i>
                                    {{ $product->media->first()->display_name }}
                                </span>
                            </a>
                        @endif
                    </div>
                    <div class="col-sm-4 invoice-col">
                        <b>@lang('product.category'): </b>
                        {{ $product->category->name ?? '--' }}<br>
                        <b>@lang('product.sub_category'): </b>
                        {{ $product->sub_category->name ?? '--' }}<br>

                        <b>@lang('product.manage_stock'): </b>
                        @if ($product->enable_stock)
                            @lang('messages.yes')
                        @else
                            @lang('messages.no')
                        @endif
                        <br>
                        @if ($product->enable_stock)
                            <b>@lang('product.alert_quantity'): </b>
                            {{ $product->alert_quantity ?? '--' }}
                        @endif

                        @if (!empty($product->warranty))
                            <br>
                            <b>@lang('lang_v1.warranty'): </b>
                            {{ $product->warranty->display_name }}
                        @endif
                    </div>
                    <div class="col-sm-4 invoice-col">
                        <b>@lang('product.expires_in'): </b>
                        @php
                            $expiry_array = ['months' => __('product.months'), 'days' => __('product.days'), '' => __('product.not_applicable')];
                        @endphp
                        @if (!empty($product->expiry_period) && !empty($product->expiry_period_type))
                            {{ $product->expiry_period }} {{ $expiry_array[$product->expiry_period_type] }}
                        @else
                            {{ $expiry_array[''] }}
                        @endif
                        <br>
                        @if ($product->weight)
                            <b>@lang('lang_v1.weight'): </b>
                            {{ $product->weight }}<br>
                        @endif
                        <b>@lang('product.applicable_tax'): </b>
                        {{ $product->product_tax->name ?? __('lang_v1.none') }}<br>
                        @php
                            $tax_type = ['inclusive' => __('product.inclusive'), 'exclusive' => __('product.exclusive')];
                        @endphp
                        <b>@lang('product.selling_price_tax_type'): </b>
                        {{ $tax_type[$product->tax_type] }}<br>
                        <b>@lang('product.product_type'): </b>
                        @lang('lang_v1.' . $product->type)

                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="col-sm-12">
                        {!! $product->product_description !!}
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 invoice-col">
                    <div class="thumbnail">
                        <img src="{{ $product->image_url }}" alt="Product image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>@lang('product.variations'):</h4>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('product.variations')</th>
                                    <th>@lang('product.sku')</th>
                                    <th>@lang('product.default_purchase_price') (@lang('product.exc_of_tax'))</th>
                                    <th>@lang('product.default_purchase_price') (@lang('product.inc_of_tax'))</th>
                                    <th>@lang('product.default_selling_price') (@lang('product.exc_of_tax'))</th>
                                    <th>@lang('product.default_selling_price') (@lang('product.inc_of_tax'))</th>
                                </tr>
                            </thead>
                            <tbody id="product_body_{{ $product->id }}">
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang( 'messages.close' )</button>
        </div>
    </div>
</div>
