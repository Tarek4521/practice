@extends('frontend.layouts.app')


@section('content')

<main class="main">
    @include('frontend.pages.cart.section.page_header')
   @include('frontend.pages.cart.section.breadcrumb')

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                      @include('frontend.pages.cart.section.table_wishlist')
                        @include('frontend.pages.cart.section.cart_bottom')

                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                      @include('frontend.pages.cart.section.cart_summery')


                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
