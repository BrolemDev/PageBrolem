@extends('layout/app')

@section('content')
    <style>
        .embed-container {
            border: 2px solid green;
            /* Cambia el grosor y el color del borde según lo desees */
            border-radius: 10px;
            /* Esto redondeará los bordes del contenedor */
            overflow: hidden;
            /* Esto asegura que el borde se ajuste correctamente */
        }

        .embed-container iframe {
            width: 100%;
            /* Ajusta el ancho del iframe al 100% del contenedor */
            height: 100%;
            /* Ajusta la altura del iframe al 100% del contenedor */
            border: none;
            /* Elimina cualquier borde adicional del iframe */
        }
    </style>

    <section class="page-header page-header--about">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <!-- <img src="assets/images/shapes/page-header-s-1.png" alt="About Us" class="page-header__shape"> -->
            <h2 class="page-header__title">About Us</h2>
            <ul class="agrofa-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>About</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="food-one  food-one--about">
        <div class="container">
            <div class="row food-one__content-bx">
                <div class="food-one__left fadeInLeft wow" data-wow-delay="200ms">
                    <div class="section-common-title">
                        <h2 class="food-one__title food-chose-title">From Seed to Shipment: Ensuring Quality, Commitment,
                            and
                            Excellence Every Steo of the Way.</h2>
                        <p class="food-one__text food-chose-text">With more than two decades of expertise in the Andean
                            grains and beans industry, our dedicaction to quality and sustainability reamins steadfast. Ocer
                            the years, we have navigated and surmounted numerous challenges, estabilishing a flawless and
                            lasting reputation. Known by our trusted name for over 20 years, we stand not just as a
                            bussines, but as a beacon of resilience and trustworthiness.</p>
                    </div>

                    <div class="food-one__featurebx">
                        <div class="food-one__col">
                            <div class="food-one__quality-info-bx">
                                <h6 class="food-one__quality-title">Guarenteed quality born from over 20 years of expertise.
                                </h6>

                            </div>
                            <div class="food-one__quality-info-bx">
                                <h6 class="food-one__quality-title">Continuously improving with enduring commitment</h6>
                            </div>
                        </div>

                        <div class="food-one__col">

                        </div>
                    </div>
                </div>
                <div class="food-one__right fadeInRight wow" data-wow-delay="200ms">
                    <div class="food-one__right-img">
                        <img src="{{ asset('images/brolem/img_3566.png') }}" alt="">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-center">
                <div class="blog-one--list__content col-lg-12">
                    <div class="blog-details">
                        <div class="blog-card blog-card-two @@extraClassName">
                            <div class="blog-card__image">
                                <div class="blog-card__image">
                                    <a href="https://www.youtube.com/embed/cPn7Vyvmkbs" class="blog-card__image__link">
                                        <img src="assets/images/play-icon.png" alt="Play Video" class="play-icon">
                                    </a>
                                    <iframe
                                        src="https://www.youtube-nocookie.com/embed/cPn7Vyvmkbs?si=b0ZS4rRxTKqKK1fw&rel=0&amp;controls=0"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div><!-- /.blog-card__image -->
                            </div>
                        </div><!-- /.blog-card__image -->
                    </div>
                </div><!-- /.blog-details -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        </div>
    </section><!-- /.food-one -->
@endsection()

@section('styles')
@endsection()

@section('scripts')
    <script>
        // Función para iniciar la reproducción del video automáticamente
        function playVideo() {
            var iframe = document.querySelector('iframe');
            var videoSrc = iframe.getAttribute('src');
            iframe.setAttribute('src', videoSrc + '?autoplay=1');
        }

        // Llamar a la función para iniciar la reproducción del video automáticamente
        playVideo();
    </script>
@endsection
