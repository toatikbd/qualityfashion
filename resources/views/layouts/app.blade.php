<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') || Quality Fashion</title>
    <link rel="shortcut icon" href="{{ asset('webasset')}}/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/flaticon.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/themify-icons.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/shortcodes.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/megamenu.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('webasset')}}/css/responsive.css"/>
    <style>
        @media (max-width: 1199px){
            .site-branding {
                padding: 0px!important;
            }
        }
        @media (max-width: 820px){
            .mobile-logo {
                max-width: 70%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <!--page start-->
    <div class="page">
        {{-- <div id="preloader" class="blobs-wrapper">
            <div class="ttm-bgcolor-skincolor loader-blob"></div>
        </div> --}}
        <!--header start-->
        @include('layouts.partial.header')
        <!--header end-->
        
        <!--site-main start-->
        <div class="site-main">
            @yield('content')
        </div><!--site-main end-->
        <!--footer start-->
        @include('layouts.partial.footer')
        <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->
</div><!-- page end -->


    <!-- Javascript -->
    <script src="{{ asset('webasset')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('webasset')}}/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ asset('webasset')}}/js/bootstrap.min.js"></script> 
    <script src="{{ asset('webasset')}}/js/jquery.easing.js"></script> 
    <script src="{{ asset('webasset')}}/js/jquery-waypoints.js"></script>    
    <script src="{{ asset('webasset')}}/js/jquery-validate.js"></script> 
    <script src="{{ asset('webasset')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('webasset')}}/js/slick.min.js"></script>
    <script src="{{ asset('webasset')}}/js/numinate.min.js"></script>
    <script src="{{ asset('webasset')}}/js/{{ asset('webasset')}}/imagesloaded.min.js"></script>
    <script src="{{ asset('webasset')}}/js/jquery-isotope.js"></script>
    <script src="{{ asset('webasset')}}/js/main.js"></script>
    <!-- Javascript end-->

</body>
</html>