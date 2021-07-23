<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Personal, Portfolio, Creative">
        <meta name="description" content="Kalvin Portfolio Template">
        <meta name="author" content="cosmos-themes">

        <title>@yield('title')</title>

        <!-- favicon -->
        <link href="{{asset('images/admin_image/ghi.png')}}" rel="icon" type="image/png">

        <!--Font Awesome css-->
        <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">

        <!--Bootstrap css-->
        <link rel="stylesheet" href="{{asset('user/css/bootstrap.css')}}">

        <!--Owl Carousel css-->
        <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">

        <!--Magnific Popup css-->
        <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900%7cOpen+Sans:400,600,700,800" rel="stylesheet">

        <!--Site Main Style css-->
        <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

        <!-- Fontawesome  -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Toastr notification -->
    <link rel="stylesheet" type="text/css" href="{{url('css/toastr.min.css')}}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122650090-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-122650090-1');
        </script>
@yield('css')
    </head>
 

    <body>

        <!--Preloader-->
        {{-- <div class="preloader"> --}}
            {{-- <div class="loader "></div> --}}
        {{-- </div> --}}
        <!--Preloader-->

        <!--Navbar Start-->
         @include('user.site_user.user_navbar')
        <!--Navbar End-->

        @yield('content')

        <!--Footer Start-->
        @include('user.site_user.user_footer')
        <!--Footer End-->

        <!--Jquery js-->
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <!--Bootstrap js-->
        <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
        <!--Stellar js-->
        <script src="{{asset('user/js/jquery.stellar.js')}}"></script>
        <!--Animated Headline js-->
        <script src="{{asset('user/js/animated.headline.js')}}"></script>
        <!--Owl Carousel js-->
        <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
        <!--ScrollIt js-->
        <script src="{{asset('user/js/scrollIt.min.js')}}"></script>
        <!--Isotope js-->
        <script src="{{asset('user/js/isotope.pkgd.min.js')}}"></script>
        <!--Magnific Popup js-->
        <script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
        <!--Site Main js-->
        <script src="{{asset('user/js/main.js')}}"></script>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
        <!-- Toastr notification -->
        <script type="text/javascript" src="{{url('js/toastr.min.js')}}"></script>

        @yield('js')
    </body>
</html>

