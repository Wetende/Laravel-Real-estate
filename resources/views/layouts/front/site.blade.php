<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Edmaks - Real Estate </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/bootstrap.min.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/magnific-popup.css")}}>
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/jquery.selectBox.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/dropzone.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/rangeslider.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/animate.min.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/leaflet.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/slick.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/slick-theme.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/map.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/css/jquery.mCustomScrollbar.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/fonts/font-awesome/css/font-awesome.min.css")}}">
    <link type="text/css" rel="stylesheet" href="{{assets("assets/fonts/flaticon/font/flaticon.css")}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top" class="index-body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Top header start -->
 @inludes('front.includes.top-header')
<!-- Top header end -->

<!-- main header start -->
@inludes('front.includes.main-header')
<!-- main header end -->

<!-- Banner start -->
@inludes('front.includes.banner')
<!-- banner end -->

<!-- Content start-->
@yield('content')
<!-- Content end-->

<!-- Footer start -->
@inludes('front.includes.footer')
<!-- Footer end -->

<!-- Full Page Search -->






<!-- External JS libraries -->
<script src="{{assets('assets/front/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{assets('assets/front/js/popper.min.js')}}"></script>
<script src="{{assets('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{assets('assets/front/js/jquery.selectBox.js')}}"></script>
<script src="{{assets('assets/front/js/rangeslider.js')}}"></script>
<script src="{{assets('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{assets('assets/front/js/jquery.filterizr.js')}}"></script>
<script src="{{assets('assets/front/js/wow.min.js')}}"></script>
<script src="{{assets('assets/front/js/backstretch.js')}}"></script>
<script src="{{assets('assets/front/js/jquery.countdown.js')}}"></script>
<script src="{{assets('assets/front/js/jquery.scrollUp.js')}}"></script>
<script src="{{assets('assets/front/js/particles.min.js')}}"></script>
<script src="{{assets('assets/front/js/typed.min.js')}}"></script>
<script src="{{assets('assets/front/js/dropzone.js')}}"></script>
<script src="{{assets('assets/front/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{assets('assets/front/js/leaflet.js')}}"></script>
<script src="{{assets('assets/front/js/leaflet-providers.js')}}"></script>
<script src="{{assets('assets/front/js/leaflet.markercluster.js')}}"></script>
<script src="{{assets('assets/front/js/slick.min.js')}}"></script>
<script src="{{assets('assets/front/js/maps.js')}}"></script>
<script src="{{assets('assets/front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="{{assets('assets/front/js/app.js')}}"></script>
</body>
</html>