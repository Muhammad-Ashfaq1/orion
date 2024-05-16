@extends('layout.master')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container-md bootdey">
    <div class="row gx-0">
        <div class="col-sm-3">
            <div class="sidebar">
                <div class="main-category" onclick="toggleFilters('filters1')">
                    Consumer
                    <i class="fa fa-angle-right"></i>
                </div>

                <div id="filters1" class="inner-filters" style="display:none;">
                    <div class="form-check">
                        @foreach($consumerCategories ?? [] as $index => $category)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="filter1" id="filter1_{{ $index + 1 }}">
                                <label class="form-check-label" for="filter1_{{ $index + 1 }}">
                                    {{ $category->type_name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="main-category" onclick="toggleFilters('filters2')">
                    Professional
                    <i class="fa fa-angle-right"></i>
                </div>
                <div id="filters2" class="inner-filters" style="display:none;">
                    <div class="form-check">
                        @foreach($professionalCategories ?? [] as $index => $category)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="filter2" id="filter2_{{ $index + 1 }}">
                                <label class="form-check-label" for="filter2_{{ $index + 1 }}">
                                    {{ $category->type_name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
        <div class="col-sm-9" id="js-product-listing">
            @include('partials.product-data-table')
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