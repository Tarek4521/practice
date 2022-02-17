@extends('frontend.layouts.app')

@section('content')

<main class="main">
    @include('frontend.pages.404.section.breadcrumb')

   @include('frontend.pages.404.section.error_content')
</main><!-- End .main -->
@endsection
