<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <base href="{{ asset('/') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Bobbin | {{ $title }}</title>

    @include('frontend.include.styles')

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

      @include('frontend.include.newsletter')
       @include('frontend.include.script')
    </body>
</html>
