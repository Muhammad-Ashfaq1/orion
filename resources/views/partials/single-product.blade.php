@extends('layout.master')
@section('content')
<div class="container bootdey">
    <div class="col-md-12">
        <section class="panel">
            @if(!empty($product))
             <div class="panel-body">
                <div class="col-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-5 col-12 ps-5 ">
                            <h1 class="single-heading">{{ $product->productType->type_name }}</h1>
                            <p class="single-para">{{ $product->product_model }}</p>
                        </div>
                        <div class="col-md-5 col-12 text-center">
                            <img src="{{ !empty(@$product->image_url) ? @$product->image_url : asset('assets/images/indoor1.jpeg') }}"
                                 alt="" width="300">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="qoute-wrapper">
                        <button class="get-quote">Get Quotation</button>
                    </div>
                    <h1 class="table-heading">Specification</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">{{ $product->productType->type_name }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" class="align-middle">LED Chips</td>
                                <td>EPISTAR SMD</td>
                            </tr>
                            <tr>
                                <td>BRIDGELUX</td>
                            </tr>
                            <tr>
                                <td>Light Efficiency</td>
                                <td>100 lm/w</td>
                            </tr>
                            <tr>
                                <td>Color Temprature</td>
                                <td>2700K, 4000K, 6400K, 8000K, 10000K</td>
                            </tr>
                            <tr>
                                <td>Color Rendering Index</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>Beam Angle</td>
                                <td>180 &deg;</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>Pin, Screw</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Fixture</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fixture Size</td>
                                <td>A50, A55, A60, A70, A95 are available</td>
                            </tr>
                            <tr>
                                <td>Fixture Material</td>
                                <td>Plastic Covring Aluminum</td>
                            </tr>
                            <tr>
                                <td>Fixture Color</td>
                                <td>White</td>
                            </tr>
                        </tbody>

                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Drive</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Driver Mode</td>
                                <td>Constant Current Output Driver</td>
                            </tr>
                        </tbody>

                        <thead>
                            <tr>
                                <th scope="col" colspan="2">General Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Voltage</td>
                                <td>85V/300V</td>
                            </tr>
                            <tr>
                                <td>Life Span</td>
                                <td>50000 Hours</td>
                            </tr>
                            <tr>
                                <td>Warranty</td>
                                <td>3 Years</td>
                            </tr>
                            <tr>
                                <td>Certification</td>
                                <td>ISO, CE, RoHS, NOM, SONCAP, CIQ, SASO</td>
                            </tr>
                            <tr>
                                <td>OEM & ODM Service</td>
                                <td>Offered</td>
                            </tr>
                            <tr>
                                <td>Packing</td>
                                <td>Customized</td>
                            </tr>
                            <tr>
                                <td>Free Samples</td>
                                <td>Offered</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </section>
    </div>
    <div class="container single-tab">


        <div class="product_download">
            <div class="download_name">SPECS SHEET</div>
            <div class="download_box">
                <div class="download_item">
                    <img src="https://asset.site.joinf.com/alite/images/pdf.png" alt="">
                    <div class="download_name">Orion Book</div>
                    <a class="download" href="{{ asset('assets/pdf/orion-book.pdf') }}" data-file="">Download PDF</a>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function changeImage(newSrc) {
    document.getElementById('mainImage').src = newSrc;
}
</script>

@endsection