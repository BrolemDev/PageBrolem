@extends('layout/app')

@section('content')
    <section class="why-choose-one blog-one--details">
        <div class="container">
            <div class="section-common-title fadeInDown wow" data-wow-delay="200ms">
                <span class="why-choose-one__chose-reasone food-chose-reasone">
                    <img class="why-choose-one__chose-icon food-chose-icon" src="assets/images/shapes/food-img1-1.png"
                        alt="">
                    <strong class="why-choose-one__chose-name food-chose-name">Our Process</strong>
                </span>
                <h2 class="why-choose-one__title food-chose-title">Our Commitment to Quality</h2>
            </div>


            <div class="blog-card-two__content">

                <p class="blog-card-two__text">With over 20 years of industry experience, our rigorous quality control
                    standarts set us apart. We take pride in adhering to the most stringent protocols to ensure our grains
                    meet the highest quality and perfectly align with our customers' needs. Each grain we deliver reflects
                    our two decades of dedication, continuos innovation, and unwavering commitment to excellence at every
                    stage of the process.</p>

            </div><!-- /.blog-card-two__content -->
        </div>
    </section><!-- /.why-choose-one -->
    <section class="companies-two companies-two--about">
        <div class="container">
            <div class="section-common-title">
                <h2 class="companies-two__title food-chose-title fadeInUp wow" data-wow-delay="100ms">Certified products
                </h2>
            </div>

            <div class="companies-two__carousel agrofa-owl__carousel agrofa-owl__carousel--with-shadow agrofa-owl__carousel--basic-nav owl-carousel"
            data-owl-options='{
            "items": 1,
            "margin": 0,
            "loop": true,
            "smartSpeed": 700,
            "nav": false,
            "navText": [""],
            "dots": true,
            "autoplay": false,
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2
                },
                "992": {
                    "items": 3
                },
                "1367": {
                    "items": 4
                }
            }
        }'>
        <div class="item">
            <div class="companies-two__image">
                <div class="companies-two__inner-img">
                    <a href="#"><img src="{{ asset('images/brolem/logos/usda.png') }}" alt="" class="carousel-image"></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="companies-two__image">
                <div class="companies-two__inner-img">
                    <a href="#"><img src="{{ asset('images/brolem/logos/haccp.png') }}" alt="" class="carousel-image"></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="companies-two__image">
                <div class="companies-two__inner-img">
                    <a href="#"><img src="{{ asset('images/brolem/logos/gpc.png') }}" alt="" class="carousel-image"></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="companies-two__image">
                <div class="companies-two__inner-img">
                    <a href="#"><img src="{{ asset('images/brolem/logos/gpc.png') }}" alt="" class="carousel-image"></a>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection()

@section('styles')
@endsection()

@section('scripts')
@endsection
