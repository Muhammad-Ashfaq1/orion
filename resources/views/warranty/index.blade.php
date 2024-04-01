@extends('layouts.app')

@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <!-- Add New Button -->
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">All Warranties</h1>
                        <button  class="btn btn-primary float-right js-add-warranty">Add New</button>
                    </div>

                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Start Entry</th>
                            <th>Date Of Expiry</th>
                            <th>QR-Code</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody id="js-add-warranty-table">
                        @include('warranty.data-table')
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->


        {{--        modal    --}}
        <div class="col-md-6 m-t-30">
            <!-- sample modal content -->
            <div id="js-add-warranty-modal" class="modal fade"  data-bs-backdrop='static' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myModalLabel">
                                Add New warranty
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form id="js-warranty-Form" enctype="multipart/form-data" >
                            <input type="hidden" name="id" id="warranty-id" value="">
                            @csrf
                            <div class="form-group p-3">
                                <label class="form-label required" for="warranty-name">warranty Name</label>
                                <input type="text" class="form-control solid" id="warranty-name" name="name" placeholder="Enter warranty name">
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
    <script src="{{asset('assets/js/admin-warranty.js')}}"></script>
@endsection
