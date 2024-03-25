@extends('layouts.app')

@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">All Products</h1>
                        <button  class="btn btn-primary float-right js-add-product">Add New</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Asset Name</th>
                            <th>Ram</th>
                            <th>Rom</th>
                            <th>Processor</th>
                            <th>Generation</th>
                            <th>Model</th>
                            <th>Serial No - Tag</th>
                            <th>Purchase Date</th>
                            <th>Exp Till</th>
                            <th>Status</th>
                            <th>Condition</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody id="js-add-product-table">
                        @include('product.data-table')
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->


        {{--        modal    --}}
        <div class="col-md-12 m-t-30">
            <div id="js-add-product-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-lg modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myModalLabel">Add New Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form id="js-product-form" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="product-id" value="">
                            @csrf
                            <div class="modal-body">
                                <div class="row p-3">
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Product Type</label>
                                        <select class="form-control solid" name="product_type_id" id="js-product-type-name-dropdown" required>
                                            <option value="">Select Product Type</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">LED Chips</label>
                                        <input type="text" class="form-control solid" name="led_chips" placeholder="Enter LED Chips" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Light Efficiency</label>
                                        <input type="text" class="form-control solid" name="light_efficiency" placeholder="Enter Light Efficiency" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Color Temperature</label>
                                        <input type="text" class="form-control solid" name="color_temperature" placeholder="Enter Color Temperature" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Color Rendering Index</label>
                                        <input type="text" class="form-control solid" name="color_rendering_index" placeholder="Enter Color Rendering Index" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Beam Angle</label>
                                        <input type="text" class="form-control solid" name="beam_angle" placeholder="Enter Beam Angle" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Fixture Size</label>
                                        <input type="text" class="form-control solid" name="fixture_size" placeholder="Enter Fixture Size" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Fixture Material</label>
                                        <input type="text" class="form-control solid" name="fixture_material" placeholder="Enter Fixture Material" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Fixture Color</label>
                                        <input type="text" class="form-control solid" name="fixture_color" placeholder="Enter Fixture Color" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Driver Mode</label>
                                        <input type="text" class="form-control solid" name="driver_mode" placeholder="Enter Driver Mode" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Voltage</label>
                                        <input type="text" class="form-control solid" name="voltage" placeholder="Enter Voltage" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Life Span</label>
                                        <input type="text" class="form-control solid" name="life_span" placeholder="Enter Life Span" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Warranty</label>
                                        <input type="text" class="form-control solid" name="warranty" placeholder="Enter Warranty" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Certification</label>
                                        <input type="text" class="form-control solid" name="certification" placeholder="Enter Certification" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">OEM & ODM Service</label>
                                        <input type="text" class="form-control solid" name="oem_odm_service" placeholder="Enter OEM & ODM Service" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Packing</label>
                                        <input type="text" class="form-control solid" name="packing" placeholder="Enter Packing" required>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label">Free Samples</label>
                                        <select class="form-control solid" name="free_samples">
                                            <option value="Offered" selected>Offered</option>
                                            <option value="Not Offered">Not Offered</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 p-3">
                                        <label class="form-label required">Image</label>
                                        <input type="file" class="form-control-file" name="image" required>
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
    <script src="{{asset('admin/assets/js/orion-products.js')}}"></script>
@endsection
