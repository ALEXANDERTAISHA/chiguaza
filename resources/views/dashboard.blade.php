@extends('layouts.app')

@section('content')
  <!-- Main Sllider Two Start -->
  <section class="main-slider-two">
    <div class="main-slider-two__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

        <div class="item main-slider-two__slide-1">
            <div class="main-slider-two__bg"
                style="background-image: url(asset('assets/images/portada.jpg);">
            </div><!-- /.slider-one__bg -->


            <div class="main-slider-two__img-box">
                <div class="main-slider-two__img-shape-1"></div>
                <div class="main-slider-two__img-shape-2"></div>
                <div class="main-slider-two__img">
                    <br>
                    <img src="{{asset('assets/images/portada.jpg')}}" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
