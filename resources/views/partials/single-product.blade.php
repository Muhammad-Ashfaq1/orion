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
                        <button class="get-quote" id="modalBtn">Get Quotation</button>
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
                                <td>Light Efficiency(Initial Lumen)</td>
                                <td>{{ @$product->initial_lumen }}</td>
                            </tr>
                            <tr>
                                <td>Light Efficiency(Stable Lumen)</td>
                                <td>{{ @$product->stable_lumen }}</td>
                            </tr>
                                {{--<tr>--}}
                                    {{--<td>Color Temprature</td>--}}
                                    {{--<td>2700K, 4000K, 6400K, 8000K, 10000K</td>--}}
                                {{--</tr>--}}
                            <tr>
                                <td>Color Rendering Index</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>Beam Angle</td>
                                <td>{{ @$product->beam_angle }} &deg;</td>
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
                                <th scope="col" colspan="2">General Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Watt</td>
                                <td>{{ @$product->wattage }}</td>
                            </tr>
                            <tr>
                                <td>Life Span</td>
                                <td>{{ @$product->life_hours }} Hours</td>
                            </tr>
                            <tr>
                                <td>Warranty</td>
                                <td>{{ @$product->guarantee ?? 2 }} Years</td>
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
{{-- </div>
</div> --}}
 {{-- QUOTATION MODAL --}}

 <div class="modal-box">
    <div id="quoteModdal" class="modal">
        <div class="modal-content">
            <div class="d-flex justify-content-between p-3">
                 <h3>Add Details</h3>
                 <span class="close" id="qclose">&times;</span>
            </div>
            <div class="col-md-12">
             <div class="bg-white border rounded shadow-sm overflow-hidden">

                 <form id="js-contact-us-form23" method="POST" action="">
                     @csrf
                     <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                         <div class="col-12">
                             <label for="fullname" class="form-label">Full Name <span
                                     class="text-danger">*</span></label>
                             <input type="text" class="form-control" id="fullname" name="name" value="" required>
                         </div>
                         <div class="col-12 col-md-6">
                             <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <span class="input-group-text">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                         <path
                                             d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                     </svg>
                                 </span>
                                 <input type="email" class="form-control" id="email" name="email" value="" required>
                             </div>
                         </div>
                         <div class="col-12 col-md-6">
                             <label for="phone" class="form-label">Phone Number</label>
                             <div class="input-group">
                                 <span class="input-group-text">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                         <path
                                             d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                     </svg>
                                 </span>
                                 <input type="tel" class="form-control" id="phone" name="phone_number" value="">
                             </div>
                         </div>
                         <div class="col-12">
                             <label for="message" class="form-label">Message <span
                                     class="text-danger">*</span></label>
                             <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                         </div>
                         <div class="col-12">
                             <div class="d-grid">
                                 <button class="btn btn-primary btn-lg submit-btn" type="submit">Submit</button>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
    </div>
 </div>

 
 {{-- QUOTATION MODAL --}}

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<script>
function changeImage(newSrc) {
    document.getElementById('mainImage').src = newSrc;
}
</script>
<script>
    $(document).ready(function(){
        event.preventDefault();
        // $('#quoteModdal').css('display', 'none');
        // Show modal on button click
        $('#modalBtn').click(function(){
            $('#quoteModdal').show();
        });

        // Hide modal on button click
        $('#qclose').click(function(){
            $('#quoteModdal').hide();
            console.log('herooooooo');
        });
    });
</script>

@endsection