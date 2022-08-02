<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Axies | NFT Marketplace HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/icon/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/assets/icon/Favicon.png') }}">

</head>

<body class="body header-fixed is_dark">

<!-- preloade -->
<div class="preload preload-container">
    <div class="preload-logo"></div>
</div>
<!-- /preload -->

<div id="wrapper">
    <div id="page" class="clearfix">
             @include('frontend.body.header')
        <!-- Header -->
        <!-- title page -->

             @yield('section')

        <!-- Footer -->
            @include('frontend.body.footer')
        <!-- /#footer -->
    </div>
    <!-- /#page -->

    <!-- Modal Popup Bid -->
            @include('frontend.body.bid_modal')
</div>
<!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.easing.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugin.js') }}"></script>
<script src="{{ asset('frontend/assets/js/count-down.js') }}"></script>
<script src="{{ asset('frontend/assets/js/shortcodes.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper.js') }}"></script>
<script src="{{ asset('frontend/assets/js/web3.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/moralis.js') }}"></script>
<script src="{{ asset('frontend/assets/js/nft.js') }}"></script>

</body>

</html>
