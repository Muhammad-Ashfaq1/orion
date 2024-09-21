@extends('layout.master')
@section('content')
<div class="container-md bootdey-products-list">
    <div class="row gx-0">
        <div class="col-sm-3">
            <div class="sidebar">
                <div class="main-category" onclick="toggleFilters('filters1')">
                    Consumer
                    <i class="fa fa-angle-right"></i>
                </div>

                <div id="filters1" class="inner-filters" style="display:none;">
                    <div class="form-check">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter1" id="filter1_1"
                                onclick="fetchProducts(1)">
                            <label class="form-check-label" for="filter1_1">
                                LED Bulbs
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter1" id="filter1_2"
                                onclick="fetchProducts(2)">
                            <label class="form-check-label" for="filter1_2">
                                LED Downlights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter1" id="filter1_3"
                                onclick="fetchProducts(3)">
                            <label class="form-check-label" for="filter1_3">
                                LED Slim Panel Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter1" id="filter1_4"
                                onclick="fetchProducts(4)">
                            <label class="form-check-label" for="filter1_4">
                                LED Adjustable Panel Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter1" id="filter1_5"
                                onclick="fetchProducts(5)">
                            <label class="form-check-label" for="filter1_5">
                                LED Surface Panel
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter1" id="filter1_6"
                                onclick="fetchProducts(6)">
                            <label class="form-check-label" for="filter1_6">
                                LED COB
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter1" id="filter1_7"
                                onclick="fetchProducts(7)">
                            <label class="form-check-label" for="filter1_7">
                                LED Batten Light
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter1" id="filter1_8"
                                onclick="fetchProducts(8)">
                            <label class="form-check-label" for="filter1_8">
                                LED Tube Light
                            </label>
                        </div>
                    </div>
                </div>

                <div class="main-category" onclick="toggleFilters('filters2')">
                    Professional
                    <i class="fa fa-angle-right"></i>
                </div>
                <div id="filters2" class="inner-filters" style="display:none;">
                    <div class="form-check">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_1"
                                onclick="fetchProducts(9)">
                            <label class="form-check-label" for="filter2_1">
                                LED Street Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_2"
                                onclick="fetchProducts(10)">
                            <label class="form-check-label" for="filter2_2">
                                LED Flood Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_3"
                                onclick="fetchProducts(11)">
                            <label class="form-check-label" for="filter2_3">
                                LED Highbay Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_4"
                                onclick="fetchProducts(12)">
                            <label class="form-check-label" for="filter2_4">
                                LED Panel Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_5"
                                onclick="fetchProducts(13)">
                            <label class="form-check-label" for="filter2_5">
                                LED T Series Bulbs
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_6"
                                onclick="fetchProducts(14)">
                            <label class="form-check-label" for="filter2_6">
                                LED Spot Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_7"
                                onclick="fetchProducts(15)">
                            <label class="form-check-label" for="filter2_7">
                                LED Tube Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_8"
                                onclick="fetchProducts(16)">
                            <label class="form-check-label" for="filter2_8">
                                LED Stadium Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_9"
                                onclick="fetchProducts(17)">
                            <label class="form-check-label" for="filter2_9">
                                LED Solar Street Lights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter2" id="filter2_10"
                                onclick="fetchProducts(18)">
                            <label class="form-check-label" for="filter2_10">
                                LED Smart Lighting
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
       
           @if($specifications->isEmpty())
             <div style="display: flex; justify-content: center; align-items: center; height: 100vh;"><h1 > data not found</h1></div>
             
            @else 
             
       
        <div class="col-sm-9" id="js-product-listing">
            {{-- <h1 class="consumer-heading py-4 px-0"> {{$product->productType->type_name}}</h1> --}}
            <div class="row flex-wrap justify-content-start p-0">
          <h1 class="consumer-heading py-4">{{ $specifications->first()->product_model ?? ''}} (sub_categories)</h1>

           
                {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('single-product') }}">
                            <h3 class="consumer-sub-link">A55/A60 A2B Series with 3 Watt</h3>
                            <div class="consumer-sub-img">
                                <img src="https://orionlightingpvtltd.com/storage/images/products/1719819945_1.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div> --}}
             
                @foreach ($specifications as $product )
                    
               
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('detail',[ 'id'=>$product->id]) }}">
                            <h3 class="consumer-sub-link">{{$product->type}}</h3>
                            <div class="consumer-sub-img">
                                {{-- <img src="https://orionlightingpvtltd.com/storage/images/products/1719821434_1.png" --}}
                                    {{-- alt=""> --}}
                                    <img src="{{ asset('storage/images/products/' . $product->image_url) }}" alt="Product Image">


            {{-- <img src="{{ !empty($product->image_url) ? $product->image_url : asset('storage/images/products') }}"> --}}

                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

                {{-- <div><h1> data not found</h1></div> --}}
                @endif
                 {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('single-product') }}">
                            <h3 class="consumer-sub-link">A2B-A55-5W with 5 Watt</h3>
                            <div class="consumer-sub-img">
                                <img src="https://orionlightingpvtltd.com/storage/images/products/1719821450_1.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('single-product') }}">
                            <h3 class="consumer-sub-link">A2B-A60-3W with 3 Watt</h3>
                            <div class="consumer-sub-img">
                                <img src="https://orionlightingpvtltd.com/storage/images/products/1719821467_1.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6 product-cards">
                    <div class="consumer-sub-content">
                        <a href="{{ route('single-product') }}">
                            <h3 class="consumer-sub-link">A2B-A60-5W with 5 Watt</h3>
                            <div class="consumer-sub-img">
                                <img src="https://orionlightingpvtltd.com/storage/images/products/1719821496_1.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Function to toggle inner filters
        function toggleFilters(id) {
            var filters = document.getElementById(id);
            filters.style.display = (filters.style.display === 'none') ? 'block' : 'none';
        } 
        <script>

        function fetchProducts(categoryId) {
            $.ajax({
                url: "/product-list/" + categoryId,
                {{--url: "{{ route('product-list') }}" + categoryId,--}}
                method: "GET",
                data: { id: categoryId },
                success: function(response) {
                    // Update the product list
                    if (response.trim() === '') {
                        $('#js-product-listing').html('<p>No products found for the selected category.</p>');
                    } else {
                        $('#js-product-listing').html(response);
                    }
                },
                error: function(xhr) {
                    // Handle any errors here
                    console.error(xhr.responseText);
                }
            });
        }
    </script>
@endsection
