@extends('layout.master')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container bootdey">

    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <!-- <input type="text" placeholder="Keyword Search" class="form-control" /> -->
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Category
            </header>
            <div class="panel-body">
                <ul class="nav prod-cat">
                    <li class="product-list">
                        <a href="javascript:void(0)"  class="active"><i class="fa fa-angle-right"></i> Dress</a>
                        <ul class="nav">
                            <li class="active"><a href="javascript:void(0)" >- Shirt</a></li>
                            <li><a href="javascript:void(0)" >- Pant</a></li>
                            <li><a href="javascript:void(0)" >- Shoes</a></li>
                        </ul>
                    </li>
                    <li class="product-list">
                        <a href="javascript:void(0)" ><i class="fa fa-angle-right"></i> Bags &amp; Purses</a>
                        <ul class="nav">
                            <li class="active"><a href="javascript:void(0)" >- Shirt</a></li>
                            <li><a href="javascript:void(0)" >- Pant</a></li>
                            <li><a href="javascript:void(0)" >- Shoes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="col-md-9">
        <section class="panel">
            <div class="panel-body">
                <div class="pull-right">
                    <ul class="pagination pagination-sm pro-page-list">
                        <li><a href="javascript:void(0)" >1</a></li>
                        <li><a href="javascript:void(0)" >2</a></li>
                        <li><a href="javascript:void(0)" >3</a></li>
                        <li><a href="javascript:void(0)" >»</a></li>
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
                            <a href="{{ route('single-product') }}"  class="pro-title">
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
                            <a href="javascript:void(0)"  class="pro-title">
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
                            <a href="javascript:void(0)"  class="pro-title">
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
                            <a href="javascript:void(0)"  class="pro-title">
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
@endsection