@extends('layout.master')
@section('content')

<div class="row p-md-5 gx-0 sub-products">
    <div class="col-lg-12 px-5">
        <h1 class="consumer-heading py-4">Professional</h1>
        <div class="row flex-wrap justify-content-start p-0">
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
                   
                    @foreach ($products as $product)
                        
                   
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                        <div class="consumer-sub-content">
                             <a href="{{ route('product-list', ['id' => $product->id])}}">

                                <h3 class="consumer-sub-link">{{$product->type_name}}</h3>
                                <div class="consumer-sub-img">
                                    {{-- <img src="{{ asset('assets/images/professional/led-floodlight.png') }}" alt=""> --}}

                              <img src="{{ !empty($product->image_url) ? $product->image_url : asset('assets/images/indoor1.jpeg') }}">

                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                        <div class="consumer-sub-content">
                            <a href="{{ route('product-list') }}">
                                <h3 class="consumer-sub-link">LED Highbay Lights</h3>
                                <div class="consumer-sub-img">
                                    <img src="https://orionlightingpvtltd.com/assets/images/professional/highbay.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                        <div class="consumer-sub-content">
                            <a href="{{ route('product-list') }}">
                                <h3 class="consumer-sub-link">LED Panel Lights</h3>
                                <div class="consumer-sub-img">
                                    <img src="{{ asset('assets/images/professional/led-panellight.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                        <div class="consumer-sub-content">
                            <a href="{{ route('product-list') }}">
                                <h3 class="consumer-sub-link">LED T Series Bulbs</h3>
                                <div class="consumer-sub-img">
                                    <img src="{{ asset('assets/images/professional/led_tbulb.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                        <div class="consumer-sub-content">
                            <a href="{{ route('product-list') }}">
                                <h3 class="consumer-sub-link">LED Spot Lights</h3>
                                <div class="consumer-sub-img">
                                    <img src="https://orionlightingpvtltd.com/assets/images/professional/spot_light.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                        <div class="consumer-sub-content">
                            <a href="{{ route('product-list') }}">
                                <h3 class="consumer-sub-link">LED Tube Lights</h3>
                                <div class="consumer-sub-img">
                                    <img src="{{ asset('assets/images/professional/led-tubelight.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards"> --}}
                        {{-- <div class="consumer-sub-content">
                            <a href="{{ route('product-list') }}">
                                <h3 class="consumer-sub-link">LED Stadium Lights</h3>
                                <div class="consumer-sub-img">
                                    <img src="https://orionlightingpvtltd.com/assets/images/professional/stadium_light.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                        <div class="consumer-sub-content">
                            <a href="{{ route('product-list') }}">
                                <h3 class="consumer-sub-link">LED Solar Street Lights</h3>
                                <div class="consumer-sub-img">
                                    <img src="{{ asset('assets/images/professional/led_streetlight.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                        <div class="consumer-sub-content">
                            <a href="{{ route('product-list') }}">
                                <h3 class="consumer-sub-link">LED Smart Lighting</h3>
                                <div class="consumer-sub-img">
                                    <img src="{{ asset('assets/images/professional/smart_light.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div> --}}
                                    </div>
    </div>
</div>
@endsection
