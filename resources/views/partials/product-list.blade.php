@extends('layout.master')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container-md bootdey">
    <div class="row gx-0">
        <div class="col-sm-3">
            <div class="sidebar">
                <div class="main-category" onclick="toggleFilters('filters1')">
                    Indoor <i class="fa fa-angle-right"></i>
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
                    OutDoor <i class="fa fa-angle-right"></i>
                </div>
                <div id="filters2" class="inner-filters" style="display:none;">
                    <div class=" form-check">
                        <input class="form-check-input" type="radio" name="filter2" id="filter2_1">
                        <label class="form-check-label" for="filter2_1">
                            10 W
                        </label>
                    </div>

                    <div class=" form-check">
                        <input class="form-check-input" type="radio" name="filter2" id="filter2_1">
                        <label class="form-check-label" for="filter2_1">
                            15 W
                        </label>
                    </div>

                    <div class=" form-check">
                        <input class="form-check-input" type="radio" name="filter2" id="filter2_1">
                        <label class="form-check-label" for="filter2_1">
                            20 W
                        </label>
                    </div>

                    <div class=" form-check">
                        <input class="form-check-input" type="radio" name="filter2" id="filter2_1">
                        <label class="form-check-label" for="filter2_1">
                            25 W
                        </label>
                    </div>
                    <div class=" form-check">
                        <input class="form-check-input" type="radio" name="filter2" id="filter2_1">
                        <label class="form-check-label" for="filter2_1">
                            30 W
                        </label>
                    </div>

                    <div class=" form-check">
                        <input class="form-check-input" type="radio" name="filter2" id="filter2_1">
                        <label class="form-check-label" for="filter2_1">
                            35 W
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-9">
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
            <h1 class="consumer-heading ps-3">LED Street Lights</h1>
            <div class="row flex-wrap justify-content-start">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                    <div class="consumer-sub-content">
                        <a href="">
                            <div class="consumer-sub-img">
                                <img src="{{ asset('assets/images/indoor1.jpeg') }}" alt="">
                            </div>
                            <h3 class="consumer-sub-link">Chalice 74</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                    <div class="consumer-sub-content">
                        <a href="">
                            <div class="consumer-sub-img">
                                <img src="{{ asset('assets/images/indoor1.jpeg') }}" alt="">
                            </div>
                            <h3 class="consumer-sub-link">Chalice 74</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                    <div class="consumer-sub-content">
                        <a href="">
                            <div class="consumer-sub-img">
                                <img src="{{ asset('assets/images/indoor1.jpeg') }}" alt="">
                            </div>
                            <h3 class="consumer-sub-link">Chalice 74</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                    <div class="consumer-sub-content">
                        <a href="">
                            <div class="consumer-sub-img">
                                <img src="{{ asset('assets/images/indoor1.jpeg') }}" alt="">
                            </div>
                            <h3 class="consumer-sub-link">Chalice 74</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-6">
                    <div class="consumer-sub-content">
                        <a href="">
                            <div class="consumer-sub-img">
                                <img src="{{ asset('assets/images/indoor1.jpeg') }}" alt="">
                            </div>
                            <h3 class="consumer-sub-link">Chalice 74</h3>
                        </a>
                    </div>
                </div>
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