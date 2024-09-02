<div class="header-bottom">
    {{-- <div class="container">
        <div class="row align-items-center">
            <div class="col-5">
                <div class="logos">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/remove-bg-logo.png') }}" alt="">
                    </a>    
                </div>
            </div>
        </div>
    </div> --}}
    <div class=".container-fluid p-0 header-wrapper">
        <div class="header container">
            <div class="logos">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/remove-bg-logo.png') }}" alt="">
                </a>    
            </div>
            <div class="col-md-9 header-left">
                
                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="{{ Request::routeIs('home') ? 'active' : '' }}"><a
                                href="{{ route('home') }}">Home</a></li>
                        <li class="grid {{ Request::routeIs('products') ? 'active' : '' }}">
                            <a href="{{ route('products') }}" class="products-link">Products</a>
                            <ul class="product-dropdown">
                                <li>
                                    <a href="{{ route('consumer') }}">Consumer</a>
                                    <ul class="nestedMenu">
                                        @foreach(@$consumerCategories ?? [] as $category)
                                        <li><a
                                                href="{{ route('product-list', ['id' => $category->id]) }}">{{ $category->type_name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('professional') }}">Professional</a>
                                    <ul class="nestedMenu">
                                        @foreach(@$professionalCategories ?? [] as $category)
                                        <li><a
                                                href="{{ route('product-list', ['id' => $category->id]) }}">{{ $category->type_name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="grid {{ Request::routeIs('projects') ? 'active' : '' }}"><a
                                href="{{ route('projects')}}">Projects</a>
                        </li>
                        <li class="grid {{ Request::routeIs('about-us') ? 'active' : '' }}"><a
                                href="{{ route('about-us') }}">About Us</a>
                        <li class="grid {{ Request::routeIs('contact-us') ? 'active' : '' }}"><a
                                href="{{ route('contact-us') }}">Contact Us</a>

                        </li>
                        <li class="grid {{ Request::routeIs('support') ? 'active' : '' }}"><a
                                href="{{ route('support') }}">Support</a>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-right p-0">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/new-script.js') }}"></script>
<script>
$(document).ready(function() {
    const productsLink = $('.products-link');
    const productDropdown = $('.product-dropdown');
    $(document).on('click', function(event) {
        const isClickInside = productsLink.is(event.target) || productDropdown.has(event.target)
            .length > 0;
        if (!isClickInside) {
            productDropdown.removeClass('active');
            closeAllSubmenus();
        }
    });

    productDropdown.on('click', function(event) {
        event.stopPropagation();
    });

    productDropdown.on('mouseenter', function() {
        productDropdown.addClass('active');
    });


    productDropdown.on('mouseleave', function(event) {
        if (!isMouseOverDropdown(event)) {
            productDropdown.removeClass('active');
            closeAllSubmenus();
        }
    });
    // nested menu
    const submenuItems = $('.product-dropdown .nestedMenu');
    submenuItems.each(function() {
        const submenu = $(this);
        const parentItem = submenu.parent();
        parentItem.on('mouseenter', function() {
            submenu.css('display', 'block');
        });
        parentItem.on('mouseleave', function(event) {
            if (!isMouseOverElement(event, submenu.get(0))) {
                submenu.css('display', 'none');
            }
        });
        parentItem.on('click', function(event) {
            event
                .stopPropagation();
        });
    });

    function closeAllSubmenus() {
        submenuItems.css('display', 'none');
    }

    function isMouseOverDropdown(event) {
        return $(event.relatedTarget).is(productDropdown) || productDropdown.has(event.relatedTarget).length >
            0;
    }

    function isMouseOverElement(event, element) {
        return $(event.relatedTarget).is(element) || $.contains(element, event.relatedTarget);
    }
    $('.product-dropdown').find('li').each(function(index) {
        $(this).css('animation-delay', (index + 1) * 0.02 + 's');
    });
});
</script>