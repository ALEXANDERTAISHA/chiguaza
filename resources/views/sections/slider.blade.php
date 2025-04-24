<!-- Main Sllider Start -->
<section class="main-slider">
    <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

        @foreach ($sliders as $item)
            
        
        <div class="item main-slider__slide-{{ $item->id }}">
            <div class="main-slider__bg"
                style="background-image: url({{ Storage::url($item->fondo) }});">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider__shape-1">
                <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
            </div>
            <div class="main-slider__shape-2">
                <img src="{{ asset('assets/images/shapes/main-slider-shape-2.png') }}" alt="">
            </div>
            <div class="main-slider__shape-3">
                <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
            </div>
            <div class="main-slider__meta-box">
                <ul class="main-slider__meta list-unstyled">
                    
                    <li>
                        <div class="icon">
                            <span class="fas fa-clock"></span>
                        </div>
                        <div class="text">
                            <p>{{ $item->updated_at }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="main-slider__content">
                    <p class="main-slider__sub-title">{{ $item->titulo_2 }}</p>
                    <h4 class="main-slider__title" style="font-size: 30px;">{{ $item->titulo_1 }}</h4>
                    <div class="main-slider__btn-box">
                        <a target="_blank" href="{{ $item->url_explorar_mas }}" class="main-slider__btn thm-btn">Descubrir más</a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</section>
