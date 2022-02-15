<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <base href="{{ asset('/') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-9.css">
    <link rel="stylesheet" href="assets/css/demos/demo-9.css">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="page-wrapper">
           @include('frontend.include.header')

          @yield('content')

          @include('frontend.include.footer')

       </div><!-- End .page-wrapper -->
       <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

      @include('frontend.include.mobile')

      @include('frontend.include.modal')

       <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
           <div class="row justify-content-center">
               <div class="col-10">
                   <div class="row no-gutters bg-white newsletter-popup-content">
                       <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                           <div class="banner-content text-center">
                               <img src="assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                               <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                               <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                               <form action="#">
                                   <div class="input-group input-group-round">
                                       <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                       <div class="input-group-append">
                                           <button class="btn" type="submit"><span>go</span></button>
                                       </div><!-- .End .input-group-append -->
                                   </div><!-- .End .input-group -->
                               </form>
                               <div class="custom-control custom-checkbox">
                                   <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                   <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                               </div><!-- End .custom-checkbox -->
                           </div>
                       </div>
                       <div class="col-xl-2-5col col-lg-5 ">
                           <img src="assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                       </div>
                   </div>
               </div>
           </div>
       </div>

       @include('frontend.include.script')
    </body>
</html>
