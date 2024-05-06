<div class="header-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5">
                <div class="logos">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=".container-fluid p-0 header-wrapper">
        <div class="header container">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li class="grid">
                            <a href="{{ route('products') }}" class="products-link">Products</a>
                            <ul class="product-dropdown">
                                <li>
                                    <a href="">Consumer</a>
                                    <ul class="nestedMenu">
                                        <li><a href="#">LED Bulbs</a></li>
                                        <li><a href="#">LED Downlights</a></li>
                                        <li><a href="#">LED Slim Panel Lights</a></li>
                                        <li><a href="#">LED Adjustable Panel Lights</a></li>
                                        <li><a href="#">LED Surface Panel</a></li>
                                        <li><a href="#">LED COB</a></li>
                                        <li><a href="#">LED Batten Light</a></li>
                                        <li><a href="#">LED Tube Light</a></li>
                                        <!-- Add more submenu items as needed -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Professional</a>
                                    <ul class="nestedMenu">
                                        <li><a href="#">LED Street Lights</a></li>
                                        <li><a href="#">LED Flood Lights</a></li>
                                        <li><a href="#">LED Highbay Lights</a></li>
                                        <li><a href="#">LED Panel Lights</a></li>
                                        <li><a href="#">LED T Series Bulbs</a></li>
                                        <li><a href="#">LED Spot Lights</a></li>
                                        <li><a href="#">LED Tube Lights</a></li>
                                        <li><a href="#">LED Stadium Lights</a></li>
                                        <li><a href="#">LED Solar Street Lights</a></li>
                                        <li><a href="#">LED Smart Lighting</a></li>
                                        <!-- Add more submenu items as needed -->
                                    </ul>
                                </li>
                            </ul>

                            {{--                        <li class="grid"><a href="javascript:void(0)">Products</a>--}}
                            {{--                            <div class="mepanel">--}}
                            {{--                                <div class="row gx-0">--}}
                            {{--                                    <div class="col me-one">--}}
                            {{--                                        <h4>Indoor lightning &#8250;</h4>--}}
                            {{--                                        <ul>--}}
                            {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                            5W</a>
                        </li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                        13W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                        18W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                        28W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                        40W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                        50W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                        65W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                        75W</a></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col me-one">--}}
                        {{--                                        <h4>Outdoor lighting &#8250;</h4>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Down
                        Light 7W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Down
                        Light 12W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Down
                        Light 13W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Down
                        Light 18W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Down
                        Light 22W</a></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col me-one">--}}
                        {{--                                        <h4>Decorative Lightning &#8250;</h4>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Batten
                        Light 40W</a></li>--}}
                        {{--                                            <li><a href="{{ route('product-list') }}">Batten
                        Light 60W</a></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        </li>

                        <li class="grid"><a href="{{ route('projects')}}">Projects</a>
                            {{--                        <li class="grid"><a href="javascript:void(0)">Projects</a>--}}
                            {{--                            <div class="mepanel">--}}
                            {{--                                <div class="row">--}}
                            {{--                                    <div class="col me-one">--}}
                            {{--                                        <h4>Stadium</h4>--}}
                            {{--                                        <ul>--}}
                            {{--                                            <li><a href="{{ route('project') }}">LED
                            Bulb</a></li>--}}
                        {{--                                            <li><a href="{{ route('project') }}">Street
                        Lights</a></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col me-one">--}}
                        {{--                                        <h4>Shop</h4>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li><a href="{{ route('project') }}">LED
                        Bulb</a></li>--}}
                        {{--                                            <li><a href="{{ route('project') }}">Street
                        Lights</a></li>>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col me-one">--}}
                        {{--                                        <h4>Shop</h4>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li><a href="{{ route('project') }}">LED
                        Bulb</a></li>--}}
                        {{--                                            <li><a href="{{ route('project') }}">Street
                        Lights</a></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        </li>
                        <li class="grid"><a href="{{ route('about-us') }}">About Us</a>
                        <li class="grid"><a href="{{ route('contact-us') }}">Contact Us</a>

                        </li>
                        <li class="grid"><a href="{{ route('support') }}">Support</a>
                            {{--                        </li>--}}
                            {{--                        <li class="grid"><a href="{{ route('login') }}">Login</a>--}}
                            {{--                        </li>--}}
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
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