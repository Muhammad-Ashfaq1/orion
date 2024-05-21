<!DOCTYPE html>
<html>

<head>
    <title>Orion Lighting</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!--start-menu-->
    <script src="{{ asset('assets/js/simpleCart.min.js') }}"> </script>
    <link href="{{ asset('assets/css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/new-css.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/memenu.js') }}"></script>
    <!-- <script>
    $(document).ready(function() {
        $(".memenu").memenu();
    });
    </script> -->
    <!--dropdown-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />

    <script src="{{ asset('assets/js/jquery.easydropdown.js') }}"></script>
</head>

<body>

    @include('layout.header')
    @yield('content')
    @include('layout.footer')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/jsQR.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @yield('extra-js')

</body>

</html>