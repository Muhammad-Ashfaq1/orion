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
                        <li class="grid"><a href="{{ route('product-list') }}">Products</a>
                            {{--                        <li class="grid"><a href="javascript:void(0)">Products</a>--}}
                            {{--                            <div class="mepanel">--}}
                            {{--                                <div class="row gx-0">--}}
                            {{--                                    <div class="col me-one">--}}
                            {{--                                        <h4>Indoor lightning &#8250;</h4>--}}
                            {{--                                        <ul>--}}
                            {{--                                            <li><a href="{{ route('product-list') }}">Bulb
                            5W</a></li>--}}
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