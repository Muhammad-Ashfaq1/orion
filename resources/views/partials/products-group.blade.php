@extends('layout.master')
@section('content')


<div class="row p-5 gx-0">
    <div class="col-lg-12 p-5">
        <div class="row flex-wrap justify-content-center">
            <div class="col-md-6 col-12">
                <div class="content-products">
                    <h1 class="heading">
                        Consumer
                    </h1>
                    <div class="content-products-img">
                        <a href="">
                            <img src="{{ asset('assets/images/consumer.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="content-products">
                    <h1 class="heading">
                        Professional
                    </h1>
                    <div class="content-products-img">
                        <a href="">
                            <img src="{{ asset('assets/images/professional.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection