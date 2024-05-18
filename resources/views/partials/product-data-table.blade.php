@if(!empty(@$products) && count(@$products) > 0)
    <h1 class="consumer-heading ps-3"> {{ @$products[0]->productType->type_name }}</h1>
    <div class="row flex-wrap justify-content-start">
        @foreach($products as $product)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                <div class="consumer-sub-content">
                    <a href="">
                        <div class="consumer-sub-img">
                            <img src="{{ !empty($product->image_url) ? $product->image_url : asset('assets/images/indoor1.jpeg') }}" alt="">
                        </div>
                        <h3 class="consumer-sub-link">{{ $product->product_model }} with {{ $product->wattage }} Watt</h3>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@else
    <h1 class="consumer-heading ps-3">No Products Found</h1>
@endif
