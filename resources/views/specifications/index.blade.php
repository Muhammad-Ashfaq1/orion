
@extends('layouts.app')

@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">Product Category</h1>
                       {{-- <button  class="btn btn-primary float-right"  id="js-add-product">Add New</button> --}}
               <button  class="btn btn-primary float-right js-add-product">Add New</button>

                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Model</th>
                            <th>Wattage</th>
                            <th>Guarantee</th>
                            <th>Int Lumen</th>
                            <th>St Lumen</th>
                            <th>Life</th>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody id="js-add-product-table">
                        @include('specifications.data-table')
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->


        {{--        modal    --}}
        <div class="col-md-12 m-t-30">
            <div id="js-add-product-modal" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-lg modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myModalLabel">Add New Specification</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        {{-- <form id="js-product-Form" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" id="product-id" value="">
                            @csrf
                            <div class="modal-body">
                                <div class="row p-3">

                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Product Type</label>
                                        <select class="form-control solid" name="product_type_id" id="js-product-type-name-dropdown" required>

                                        </select>
                                    </div>

                                    <div class="col-md-6 p-3" id="model-name-container">
                                        <label class="form-label required">Model</label>
                                        <input type="text" class="form-control solid" id="product_model" name="product_model" placeholder="Model Name" required>
                                    </div>

                                    <div class="col-md-6 p-3" id="shape-container">
                                        <label class="form-label">Shape</label>
                                        <input type="text" class="form-control solid" id="shape_id" name="shape">
                                    </div>

                                    <div class="col-md-6 p-3" id="inch-container">
                                        <label class="form-label">Inch</label>
                                        <input type="number" class="form-control solid" name="inches" placeholder="Inches" step="0.01">
                                    </div>

                                    <div class="col-md-6 p-3" id="wattage-container">
                                        <label class="form-label required">Wattage</label>
                                        <input type="number" class="form-control solid" name="wattage"  id= "wattage"  required>
                                    </div>

                                    <div class="col-md-6 p-3" id="initial-lumen-container">
                                        <label class="form-label required">Initial Lumen</label>
                                        <input type="number" class="form-control solid" name="initial_lumen" id="initial_lumen"  required>
                                    </div>

                                    <div class="col-md-6 p-3" id="stable-lumen-container">
                                        <label class="form-label required">Stable Lumen</label>
                                        <input type="number" class="form-control solid" name="stable_lumen" id="stable_lumen" required>
                                    </div>

                                    <div class="col-md-6 p-3" id="ra-container">
                                        <label class="form-label">RA</label>
                                        <input type="number" class="form-control solid" name="ra" placeholder="Enter RA">
                                    </div>

                                    <div class="col-md-6 p-3" id="beam-angle-container">
                                        <label class="form-label">Beam Angle</label>
                                        <input type="number" class="form-control solid" name="beam_angle" placeholder="Enter Beam Angle">
                                    </div>

                                    <div class="col-md-6 p-3" id="life-container">
                                        <label class="form-label required">Life</label>
                                        <input type="number" class="form-control solid" id="life" name="life_hours" required>
                                    </div>

                                    <div class="col-md-6 p-3" id="guarantee-container">
                                        <label class="form-label required">Guarantee</label>
                                        <input type="number" class="form-control solid" name="guarantee" id="guarantee"  required>
                                    </div>

                                    <div class="col-md-6 p-3" id="d-round-container">
                                        <label class="form-label">D Round</label>
                                        <input type="number" class="form-control solid" name="d_round" placeholder="D Round">
                                    </div>

                                    <div class="col-md-6 p-3" id="d-square-container">
                                        <label class="form-label">D Square</label>
                                        <input type="text" class="form-control solid" name="d_square" placeholder="D Square">
                                    </div>

                                    <div class="col-md-6 p-3" id="cut-round-container">
                                        <label class="form-label">Cut Round</label>
                                        <input type="text" class="form-control solid" name="cut_round" placeholder="Cut Round">
                                    </div>

                                    <div class="col-md-6 p-3" id="cut-square-container">
                                        <label class="form-label">Cut Square</label>
                                        <input type="text" class="form-control solid" name="cut_square" placeholder="Cut Square">
                                    </div>

                                    <div class="col-md-6 p-3" id="h-container">
                                        <label class="form-label">H</label>
                                        <input type="number" class="form-control solid" name="h" placeholder="H">
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-h1-container">
                                        <label class="form-label">Lamp Size H1</label>
                                        <input type="number" class="form-control solid" name="lamp_size_h1" id="lamp_size_h1"  required>
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-h2-container">
                                        <label class="form-label">Lamp Size H2</label>
                                        <input type="number" class="form-control solid" name="lamp_size_h2" id="lamp_size_h2"  required>
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-d-container">
                                        <label class="form-label">Lamp Size D</label>
                                        <input type="number" class="form-control solid" name="lamp_size_d" id="lamp_size_d"  required>
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-w-container">
                                        <label class="form-label">Lamp Size W</label>
                                        <input type="text" class="form-control solid" name="lamp_size_w" placeholder="Enter Lamp Size W">
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-l-container">
                                        <label class="form-label">Lamp Size L</label>
                                        <input type="text" class="form-control solid" name="lamp_size_l" placeholder="Enter Lamp Size L">
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-i-container">
                                        <label class="form-label">Lamp Size I</label>
                                        <input type="text" class="form-control solid" name="lamp_size_i" placeholder="Enter Lamp Size I">
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-t-container">
                                        <label class="form-label">Lamp Size T</label>
                                        <input type="text" class="form-control solid" name="lamp_size_t" placeholder="Enter Lamp Size T">
                                    </div>

                                    <div class="col-md-6 p-3" id="image-url-container">
                                        <label class="form-label required">Image</label>
                                        <input type="file" class="form-control-file" name="image_url" id=image required >
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                            </div>
                        </form> --}}

                        <form id="js-product-form" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" id="product-id" value="">
                            @csrf
                            <div class="modal-body">
                                <div class="row p-3">

                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Product Type</label>
                                        <select class="form-control solid" name="product_type_id" id="js-product-type-name-dropdown" required>
                                            <option value="">Select Product Type</option>
                                              <option value="2">default</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Product model </label>
                                        <select class="form-control solid" name="product_model" id="product_model" >
                                            <option value="">Select Product_Model</option>
                                              <option value="2">default</option>
                                        </select>
                                    </div>

                                    {{-- <div class="col-md-6 p-3" id="model-name-container">
                                        <label class="form-label required">Model</label>
                                        <input type="text" class="form-control solid" name="product_model" id="product_model" placeholder="Model Name" required>
                                    </div> --}}

                                    <div class="col-md-6 p-3" id="shape-container">
                                        <label class="form-label">Shape</label>
                                        <input type="text" class="form-control solid" id="shape" name="shape" >
                                    </div>

                                    <div class="col-md-6 p-3" id="inch-container">
                                        <label class="form-label">Inch</label>
                                        <input type="text" class="form-control solid" name="inches" placeholder="Inches" step="0.01">
                                    </div>

                                    <div class="col-md-6 p-3" id="wattage-container">
                                        <label class="form-label required">Wattage</label>
                                        <input type="text" class="form-control solid" name="wattage" placeholder="Enter Wattage" >
                                    </div>

                                    <div class="col-md-6 p-3" id="initial-lumen-container">
                                        <label class="form-label required">Initial Lumen</label>
                                        <input type="text" class="form-control solid" name="initial_lumen" placeholder="Enter Initial Lumen" >
                                    </div>

                                    <div class="col-md-6 p-3" id="stable-lumen-container">
                                        <label class="form-label required">Stable Lumen</label>
                                        <input type="text" class="form-control solid" name="stable_lumen" placeholder="Enter Stable Lumen" >
                                    </div>

                                    <div class="col-md-6 p-3" id="ra-container">
                                        <label class="form-label">RA</label>
                                        <input type="text" class="form-control solid" name="ra" placeholder="Enter RA">
                                    </div>

                                    <div class="col-md-6 p-3" id="beam-angle-container">
                                        <label class="form-label">Beam Angle</label>
                                        <input type="text" class="form-control solid" name="beam_angle" placeholder="Enter Beam Angle">
                                    </div>
{{--
                                    <div class="col-md-6 p-3" id="life-container">
                                        <label class="form-label required">Life</label>
                                        <input type="number" class="form-control solid" name="life_hours" placeholder="Enter Life Hours" required>
                                    </div> --}}

                                    <div class="col-md-6 p-3" id="guarantee-container">
                                        <label class="form-label required">Guarantee</label>
                                        <input type="text" class="form-control solid" name="guarantee" placeholder="Enter Guarantee years" >
                                    </div>

                                    <div class="col-md-6 p-3" id="d-round-container">
                                        <label class="form-label">D Round</label>
                                        <input type="text" class="form-control solid" name="d_round" placeholder="D Round">
                                    </div>

                                    <div class="col-md-6 p-3" id="d-square-container">
                                        <label class="form-label">D Square</label>
                                        <input type="text" class="form-control solid" name="d_square" placeholder="D Square">
                                    </div>

                                    <div class="col-md-6 p-3" id="cut-round-container">
                                        <label class="form-label">Cut Round</label>
                                        <input type="text" class="form-control solid" name="cut_round" placeholder="Cut Round">
                                    </div>

                                    <div class="col-md-6 p-3" id="cut-square-container">
                                        <label class="form-label">Cut Square</label>
                                        <input type="text" class="form-control solid" name="cut_square" placeholder="Cut Square">
                                    </div>

                                    <div class="col-md-6 p-3" id="h-container">
                                        <label class="form-label">H</label>
                                        <input type="text" class="form-control solid" name="h" placeholder="H">
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-h1-container">
                                        <label class="form-label">Lamp Size H1</label>
                                        <input type="text" class="form-control solid" name="lamp_size_h1" placeholder="Enter Lamp Size H1" >
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-h2-container">
                                        <label class="form-label">Lamp Size H2</label>
                                        <input type="text" class="form-control solid" name="lamp_size_h2" placeholder="Enter Lamp Size H2" >
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-d-container">
                                        <label class="form-label">Lamp Size D</label>
                                        <input type="text" class="form-control solid" name="lamp_size_d" placeholder="Enter Lamp Size D" >
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-w-container">
                                        <label class="form-label">Lamp Size W</label>
                                        <input type="text" class="form-control solid" name="lamp_size_w" placeholder="Enter Lamp Size W">
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-l-container">
                                        <label class="form-label">Lamp Size L</label>
                                        <input type="text" class="form-control solid" name="lamp_size_l" placeholder="Enter Lamp Size L">
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-i-container">
                                        <label class="form-label">Lamp Size I</label>
                                        <input type="text" class="form-control solid" name="lamp_size_i" placeholder="Enter Lamp Size I">
                                    </div>

                                    <div class="col-md-6 p-3" id="lamp-size-t-container">
                                        <label class="form-label">Lamp Size T</label>
                                        <input type="text" class="form-control solid" name="lamp_size_t" placeholder="Enter Lamp Size T">
                                    </div>

                                    <div class="col-md-6 p-3" id="image-url-container">
                                        <label class="form-label required">Image</label>
                                        <input type="file" class="form-control-file" id="image_data" name="image_url"  accept="image/*">
                                    </div>

                                        <div class="col-md-6 p-3" id="image-url-container">
                                        <label class="form-label required">Fixture</label>
                                        <input type="text" class="form-control-file" name="fixture"  >
                                    </div>
                                        <div class="col-md-6 p-3" id="image-url-container">
                                        <label class="form-label required">Type</label>
                                        <input type="text" class="form-control-file" id="type" name="type" >
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>


        {{--        end modal   --}}


    </div>
    <!-- end row -->





@endsection



 @section('extra-js')

     {{-- <script src="{{asset('admin/assets/js/admin-product.js')}}"></script>  --}}
    <script src="{{asset('admin/assets/js/qh_specificationS.js')}}"></script>
@endsection
