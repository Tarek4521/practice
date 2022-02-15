
@extends('frontend.layouts.app')

@section('content')

<main class="main">
   @include('frontend.pages.home.section.intro')



   @include('frontend.pages.home.section.lighter')
   @include('frontend.pages.home.section.container')

    @include('frontend.pages.home.section.cta')
    @include('frontend.pages.home.section.carousel')

</main><!-- End .main -->

@endsection
