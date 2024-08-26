@extends('layout.master')
@section('content')
<div class="row p-md-5 gx-0">
    <div class="col-lg-12 p-5">
        <h1 class="consumer-heading">Consumer</h1>
        <div class="row flex-wrap justify-content-start">
            @if(!empty(@$products) && count(@$products) > 0)
            @foreach($products as $product)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('product-list', ['id' => $product->id]) }}">
                            <h3 class="consumer-sub-link">{{ $product->type_name }}</h3>
                            <div class="consumer-sub-img">
                                <img src="{{ !empty($product->image_url) ? asset('assets/images/consumer/' . $product->image_url) : asset('assets/images/indoor1.jpeg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

{{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
    <div class="consumer-sub-content">
        <a href="{{ route('products-list') }}">
            <h3 class="consumer-sub-link">LED Street Lights</h3>
            <div class="consumer-sub-img">
                <img src="https://orionlightingpvtltd.com/assets/images/professional/street_light.jpeg" alt="">
            </div>
        </a>
    </div>
</div> --}}
@endsection