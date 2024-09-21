@extends('layout.master')
@section('content')


<div class="container bootdey-single-product">
    <div class="col-md-12">
        <section class="panel">
                         <div class="panel-body">
                <div class="col-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-5 col-12 ps-5 ">
                            <h1 class="single-heading"> {{$pro->productType->type_name}}</h1>
                            {{-- <p class="single-para">LED Downlight Iron A Series</p> --}}
                        </div>
                        <div class="col-md-5 col-12 text-center">
                      <img src="{{ asset('storage/images/products/' . $pro->image_url) }}" alt="Product Image">

                       {{-- <img src="{{ !empty($pro->image_url) ? $pro->image_url : asset('assets/images/indoor1.jpeg') }}"> --}}

                            {{-- <img src="https://orionlightingpvtltd.com/storage/images/products/1719826375_iron-a.png" alt="" width="300"> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="qoute-wrapper">
                        <button class="get-quote"  id="get-quotation">Get Quotation</button>
                    </div>
                    <h1 class="table-heading">Specification</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">{{$pro->productType->type_name}}/{{$pro->product_model}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>Model_Name</td>
                                <td>{{$pro->type}}</td>
                            </tr>
                            @if($pro->productType->product_category_id==1)
                             <tr>
                                <td>product_type</td>
                                <td>Consumer</td>
                            </tr>

                            @elseif($pro->productType->product_category_id==2)
                             <tr>
                                <td>product_type</td>
                                <td>Professional</td>
                            </tr>
                            @else

                             <tr>
                                <td>product_type</td>
                                <td>-------</td>
                            </tr>
                            @endif






                            <tr>
                                <td>Wattage</td>
                                <td>{{$pro->wattage}}</td>
                            </tr>

                            <tr>
                                <td>Initial Lumens</td>
                                <td>{{$pro->initial_lumen}}</td>
                            </tr>
                            <tr>
                                <td>Beam Angle</td>
                                <td>{{$pro->beam_angle}}</td>
                            </tr>
                            <tr>
                                <td>Stable_Lumen</td>
                                <td>{{$pro->stable_lumen}}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Fixture</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RA</td>
                                <td>{{$pro->ra}}</td>
                            </tr>
                            <tr>
                                <td>Guarantee</td>
                                <td>{{$pro->guarantee}}</td>
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
                                <td>Life Span</td>
                                <td>25000</td>
                            </tr>
                            <tr>
                                <td>Warranty</td>
                                <td>.......</td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
                    </section>
    </div>
    <div class="container single-tab">


        <div class="product_download">
            <div class="download_name">SPECS SHEET</div>
            <div class="download_box">
                <div class="download_item">
                    <img src="https://asset.site.joinf.com/alite/images/pdf.png" alt="">
                    <div class="download_name">Qh Book</div>
                    <a class="download" href="https://orionlightingpvtltd.com/assets/pdf/orion-book.pdf" data-file="">Download PDF</a>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- call model  --}}

<div class="col-md-12 m-t-30">
    <div id="js-qutation-model" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Get Qutation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>


                <form id="js-contact-us">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">

                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                        <div class="col-12">
                          @csrf

                          <input type="hidden" class="form-control" id="fullname" name="type" value="Quotation" required>

                            <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="name" value="" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="pe-2">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                    </svg>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" value="" required>
                            </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ps-2">
                            <label for="phone" class="form-label">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                    </svg>
                                </span>
                                <input type="tel" class="form-control" id="phone" name="phone_number" value="">
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg submit-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>



@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <script>
$(document).ready(function() {
$(document).on('click', '#get-quotation', function(el) {
    $('#js-qutation-model').modal('show');
});

    $('#js-contact-us').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        var form = $(this); // Get the form element
        var formData = new FormData(form[0]);

        $.ajax({
            url: '/contact-us/add',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function(response) {
                    toastr.success("quotation Added  successfully!");
                    $('#querydata').html(response);
                    $('#js-qutation-model').modal('hide');
                    $('#js-contact-us')[0].reset();

                },
                error: function(xhr, status, error) {
                    let errorMessage = "Error deleting the record.";
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    toastr.error(errorMessage);
                    console.error(xhr.responseText);
                }
        });

    });

    // Example of a simple error handling function
    function handleAjaxError(xhr) {
        var response = xhr.responseJSON;
        var errors = response && response.errors ? response.errors : 'An unexpected error occurred.';
        toastr.error(errors); // Show error notification
    }
});







        </script>



