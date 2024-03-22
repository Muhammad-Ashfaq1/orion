@extends('layout.master')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container bootdey">

    <div class="col-md-3">
        <div class="sidebar">
            <div class="main-category" onclick="toggleFilters('filters1')">
                Main Category 1 <i class="fa fa-angle-right"></i>
            </div>
            <div id="filters1" class="inner-filters" style="display:none;">
                <div class=" form-check">
                    <input class="form-check-input" type="radio" name="filter1" id="filter1_1">
                    <label class="form-check-label" for="filter1_1">
                        Filter 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="filter1" id="filter1_2">
                    <label class="form-check-label" for="filter1_2">
                        Filter 2
                    </label>
                </div>
            </div>

            <div class="main-category" onclick="toggleFilters('filters2')">
                Main Category 2 <i class="fa fa-angle-right"></i>
            </div>
            <div id="filters2" class="inner-filters" style="display:none;">
                <div class=" form-check">
                    <input class="form-check-input" type="radio" name="filter2" id="filter2_1">
                    <label class="form-check-label" for="filter2_1">
                        Filter 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="filter2" id="filter2_2">
                    <label class="form-check-label" for="filter2_2">
                        Filter 2
                    </label>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-9">
        <section class="panel">
            <div class="panel-body">
                <div class="pull-right">
                    <ul class="pagination pagination-sm pro-page-list">
                        <li><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">»</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="row product-list">
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="{{ asset('assets/images/p-1.jpg') }}" alt="" />
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="{{ route('single-product') }}" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$300.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="{{ asset('assets/images/p-2.jpg') }}" alt="" />
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="javascript:void(0)" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$300.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="{{ asset('assets/images/p-3.jpg') }}" alt="" />
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="javascript:void(0)" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$300.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="{{ asset('assets/images/p-4.jpg') }}" alt="" />
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="javascript:void(0)" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$300.00</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/new-script.js') }}"></script>
<script>
// Function to toggle inner filters
function toggleFilters(id) {
    var filters = document.getElementById(id);
    filters.style.display = (filters.style.display === 'none') ? 'block' : 'none';
}
</script>
@endsection