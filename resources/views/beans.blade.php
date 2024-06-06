@extends('layout/app')

@section('content')
    <section class="portfolio">

        <main class="mainContainer">

            <!--  *****  Buttons Section Starts  *****  -->
            <div class="button-group">
                <button class="button active" data-filter="*">All</button>
                <button class="button" data-filter=".beans">BEANS</button>
                <button class="button" data-filter=".pulses">PULSES</button>
            </div>

            <div class="gallery">

                <div class="item beans">
                    <img src="{{ asset('images/brolem/MENESTRAS/7/IMG_2902.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/MENESTRAS/8/IMG_2906.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/MENESTRAS/9/IMG_2911.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/MENESTRAS/10/IMG_2913.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/MENESTRAS/11/IMG_2919.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/MENESTRAS/12/IMG_2791.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/MENESTRAS/13/IMG_2927.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/MENESTRAS/14/IMG_2930.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/MENESTRAS/15/IMG_2935.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/MENESTRAS/16/IMG_2937.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/MENESTRAS/17/IMG_2940.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/MENESTRAS/18/IMG_2943.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

            </div>

        </main>

    </section>

    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <section class="product-details">
                        <div class="container">
                            <div class="row">
                                <div class="product-details__img-col col-lg-6 col-xl-6 wow fadeInLeft"
                                    data-wow-delay="200ms">
                                    <div class="product-details__img-wrap">
                                        <div class="agrofa-tiny__slider product-details__carousel-slider"
                                            id="product-details__img-01"
                                            data-tiny-options='{
                                                "container": "#product-details__img-01",
                                                "loop": true,
                                                "navContainer": "#product-details__img-thumb-01",
                                                "items": 1,
                                                "navAsThumbnails": true,
                                                "controlsText": ["<span class=\"icon-left-arrow1\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                                "mouseDrag": true,
                                                "center": true
                                            }'>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img src="{{ asset('images/products/product-1-10.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img src="{{ asset('images/products/product-1-2.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img src="{{ asset('images/products/product-1-1.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div><!-- /.agrofa-tiny__slider -->
                                        <div class="agrofa-tiny__slider product-details__thumb-img"
                                            id="product-details__img-thumb-01"
                                            data-tiny-options='{
                                                "container": "#product-details__img-thumb-01",
                                                "loop": true,
                                                "items": 3,
                                                "mouseDrag": true,
                                                "gutter": 10,
                                                "nav": false
                                            }'>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img src="{{ asset('images/products/product-1-10.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img src="{{ asset('images/products/product-1-2.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img src="{{ asset('images/products/product-1-1.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div><!-- /.agrofa-tiny__slider -->
                                    </div>
                                </div><!-- /.column -->

                                <div class="product-details__content-col col-lg-6 col-xl-6 wow fadeInRight"
                                    data-wow-delay="300ms">
                                    <div class="product-details__content">
                                        <div class="product-details__top">
                                            <h3 class="product-details__title">Wicker chair</h3><!-- /.product-title -->
                                            <div class="product-details__price">
                                                <strong class="product__item__regular-price">$140.00</strong>
                                                <span class="product__item__offer-price">$200.00</span>
                                                <small class="product-details__off20">-20%</small>
                                                <small class="product-details__instock">In stock</small>
                                            </div><!-- /.product-price -->
                                        </div>
                                        <div class="product-details__review">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <a href="product-details.html">( 5 Customer Review )</a>
                                        </div><!-- /.review-ratings -->

                                        <div class="product-details__excerpt">
                                            <p class="product-details__excerpt">There are many variations of passages of
                                                lorem Ipsum available, but
                                                the majority have suffered alteration in some form, by injected humour or
                                                randomised words which don't look even slightly believable. </p>
                                            <ul class="product-details__feature">
                                                <li> Excellent audio performance</li>
                                                <li>Lorem ipsum available, but the majority have suffered.</li>
                                            </ul>
                                        </div><!-- /.excerp-text -->


                                        <div class="product-details__fav-cart-wrap d-flex align-items-end">
                                            <div class="product-details__quantity">
                                                <h3 class="product-details__quantity-title">Quantity</h3>
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i
                                                            class="icon-down-arrow1"></i></button>
                                                    <input type="text" id="1" value="1">
                                                    <button type="button" class="add"><i
                                                            class="icon-up-arrow1"></i></button>
                                                </div>
                                            </div><!-- /.quantity -->

                                            <div class="product-details__buttons">
                                                <a href="cart.html" class="agrofa-btn agrofa-btn--addcart"><span>Add to
                                                        Cart</span></a>
                                                <a href="cart.html" class="icon-heart fav-icon"></a>
                                            </div><!-- /.qty-btn -->
                                        </div>

                                        <ul class="product-details__feature product-details__delivery">
                                            <li><strong>Estimated Delivery:</strong> 60-60 days Ships to Bangladesh</li>
                                            <li><strong>Free Shipping:</strong> From China to Bangladesh via Super Economy
                                                Global</li>
                                        </ul>


                                        <div class="product-details__socials">
                                            <h4 class="product-details__socials__title">Share:</h4>
                                            <a href="https://www.linkedin.com">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.social-share -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.product-details -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('styles')
    <style>
        .portfolio {
            width: 100%;
            padding: 30px 8%;
            background-color: var(--body-clr);
        }

        .portfolio .section-head {
            max-width: 700px;
            margin: 0px auto 25px;
            text-align: center;
        }

        .section-head h1 {
            position: relative;
            font-size: 32px;
            margin: 10px 0px 30px;
            color: var(--primary-clr);
        }

        .button-group {
            text-align: center;
            margin-bottom: 40px;
        }

        .button-group .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            background-color: #d9d9d9;
            color: var(--agrofa-green, #fff);
            font-style: 12px !important;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.4s;
            border: none;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
        }

        .button-group .button.active {
            background-color: var(--agrofa-green, #fff);
            color: var(--body-clr);
        }

        .button-group .button:hover {
            background-color: var(--agrofa-green, #fff);
            color: var(--body-clr);
        }

        div.gallery {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        div.gallery .item {
            position: relative;
            margin: 4px;
            width: calc(33.33% - 8px);
            overflow: hidden;
            cursor: pointer;
        }

        .item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: 0.3s;
        }

        div.gallery .item:hover img {
            transform: scale(1.15);
        }

        .item .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(75, 139, 59, 0.6);
            color: var(--body-clr);
            padding: 15px;
            overflow: hidden;
            transition: opacity 0.2s ease-in-out;
            opacity: 0;
        }

        .item:hover .overlay {
            opacity: 1;
        }

        .item .overlay a {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid var(--body-clr);
            color: var(--body-clr);
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .item .overlay a:hover {
            background-color: var(--body-clr);
            color: var(--primary-clr);
        }


        @media(max-width: 1024px) {
            div.gallery .item {
                width: calc(50% - 8px);
            }
        }

        @media(max-width: 600px) {
            div.gallery .item {
                width: 100%;
                margin: 4px 0px;
            }
        }
    </style>
@endsection()

@section('scripts')
    <script></script>
@endsection
