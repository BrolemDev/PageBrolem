@extends('layout/app')

@section('content')
    <!-- main-slider-start -->
    <section class="main-slider-one" id="home">
        <div class="main-slider-one__carousel agrofa-owl__carousel owl-carousel"
            data-owl-options='{
            "loop": true,
            "animateOut": "fadeOut",
            "animateIn": "fadeIn",
            "items": 1,
            "autoplay": false,
            "autoplayTimeout": 7000,
            "smartSpeed": 1000,
            "nav": true,
                "navText": ["<span class=\"icon-left-arrow1\"></span>","<span class=\"icon-right-arrow1\"></span>"],
            "dots": false,
            "margin": 0
            }'>
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg"
                    style="background-image: url('{{ asset('images/backgrounds/farmer-bg1-1.jpg') }}')">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="main-slider-one__content">
                                <!-- slider-sub-title -->
                                <h1 class="main-slider-one__title">Over twenty years of pioneering excellence in Andean
                                    Grains: Brolem your trusted partner

                                </h1>
                                <!-- slider-title -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-one__line-bx">
                    <span class="main-slider-one__line"></span>
                    <span class="main-slider-one__line"></span>
                    <span class="main-slider-one__line"></span>
                    <span class="main-slider-one__line"></span>
                    <span class="main-slider-one__line"></span>
                </div>
            </div>
        </div>


        </div>
    </section>
    <!-- main-slider-end -->
@endsection()

@section('styles')
@endsection()

@section('scripts')
@endsection
