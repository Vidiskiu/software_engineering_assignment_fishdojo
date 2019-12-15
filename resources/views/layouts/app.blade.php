<!DOCTYPE html>
<html lang="en">
    <head>
    <title>FishDojo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">FishDojo</a>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>

            @if (Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{route('shop')}}">Shop</a>
                        <a class="dropdown-item" href="{{route('wishlist')}}">Wishlist</a>
                        <a class="dropdown-item" href="{{route('cart')}}">Cart</a>
                        <a class="dropdown-item" href="{{route('checkout')}}">Checkout</a>
                    </div>
                </li>

                <li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                <form method="POST" action="{{ route('logout') }}" class="nav-item my-auto ml-3">
                    @csrf
                    <li>
                        <button type="submit" class="btn btn-warning">
                                {{ __('Log out') }}
                        </button>
                    </li>
                </form>
            @else
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Sign in</a></li>
            @endif
        </ul>
        </div>
    </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="page-footer font-small blue ftco-section">
        
        @yield('topofpage')

        <div class="footer-copyright text-center mt-2">© 2019 Copyright:
            <a href="https://github.com/Vidiskiu/software_engineering_assignment_fishdojo">FishDojo</a>
        </div>
    </footer>
    <!-- Footer -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
