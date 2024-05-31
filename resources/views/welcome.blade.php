<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brolem</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicons/site.webmanifest') }}">
    <meta name="description"
        content="Sollox is a modern HTML Template for Beauty, Spa Centers, Hair, Nail, Spa Salons & Cosmetic shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="{{ asset('css/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet') }}">
    <link
        href="{{ asset('css/css2-1?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap') }}"
        rel="stylesheet">
    <link href="{{ asset('css/css2-2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap') }}"
        rel="stylesheet">
    <link href="{{ asset('css/css2-3?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap') }}"
        rel="stylesheet">
    <link href="{{ asset('css/css2-4?family=Pathway+Extreme:opsz,wght@8..144,400;8..144,600&display=swap') }}"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-select/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jarallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nouislider/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/agrofa-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/css/owl.theme.default.min.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('css/agrofa.css') }}">
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url('images/favicon-194x194.png');"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one" style="display: none;">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="fas fa-envelope topbar-one__info__icon"></i>
                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="fas fa-phone topbar-one__info__icon"></i>
                            <a href="tel:+92(8800)-6930">+ 92 ( 8800 ) - 6930</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <p class="topbar-one__text">Mon to Sat: 9:00am – 6:00pm Sun: Closed</p>
                        <!-- /.topbar-one__text -->
                        <div class="topbar-one__social">
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
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->


        <header class="main-header sticky-header sticky-header--one-page" style="display: none;">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo-dark.png') }}" alt="Agrofa HTML" width="156">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="dropdown megamenu scrollToLink current">
                                <a href="#home">Inicio</a>
                            </li>
                            <li class="scrollToLink"><a href="#Nosotros">Quienes Somos</a></li>
                            <li class="scrollToLink"><a href="#Servicios">Servicios</a></li>
                            <li class="scrollToLink"><a href="#Testimonios">Testimonios</a></li>
                            <li class="scrollToLink"><a href="#Contactanos">Contactanos</a></li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="#" class="search-toggler main-header__search">
                            <i class="icon-magnifying-glass"></i>
                        </a><!-- /.search-toggler -->
                        <a href="cart.html" class="main-header__cart">
                            <i class="icon-shopping-cart"></i>
                        </a><!-- /.search-toggler -->
                        <a href="contact.html" class="agrofa-btn main-header__btn">
                            <span>Book now</span>
                        </a><!-- /.thm-btn main-header__btn -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->

        <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <div class="topbar-one__social">
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
                    </div><!-- /.topbar-one__social -->

                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="icon-location topbar-one__info__icon"></i>
                            <a href="#">Lima - Perú</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="icon-email topbar-one__info__icon"></i>
                            <a href="mailto:Support@gmail.com">Support@gmail.com</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="icon-phone topbar-one__info__icon"></i>
                            <a href="tel:+8805002451">+88 05 00 24 51</a>
                        </li>
                        <!--<li class="topbar-one__info__item">
                            <i class="icon-clock topbar-one__info__icon"></i>
                            <a href="#">Mon - Sat: 09.00 to 06.00</a>
                        </li>-->
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <p class="topbar-one__right-text">Empacado y Exportación de Productos
                            Agrícolas</p>
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->


        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{ url('/') }}" class="main-header__logo_link">
                            <img src="{{ asset('images/brolemlogo.png') }}" alt="Agrofa HTML" width="156">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="dropdown megamenu scrollToLink current">
                                <a href="#home">Inicio</a>
                            </li>
                            <li class="scrollToLink"><a href="#Nosotros">Quienes Somos</a></li>
                            <li class="scrollToLink"><a href="#Servicios">Servicios</a></li>
                            <li class="scrollToLink"><a href="#Testimonios">Testimonios</a></li>
                            <li class="scrollToLink"><a href="#Contactanos">Contactanos</a></li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
        
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
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg"
                            style="background-image: url('{{ asset('images/hero-images/slider-primero-1905x511.png') }}')">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__sub-title-bx">
                                            <img class="main-slider-one__tree-icon"
                                                src="{{ asset('images/shapes/hero-tree-icon1-1.png') }}"
                                                alt="agrofa">
                                            <h5 class="main-slider-one__sub-title">Soluciones orgánicas y ecológicas
                                            </h5>
                                        </div>
                                        <!-- slider-sub-title -->
                                        <h1 class="main-slider-one__title">Tu socio confiable para el empacado y
                                            exportación de frijoles y maíz</h1>
                                        <!-- slider-title -->
                                        <p class="main-slider-one__info-text">De la emergencia climática a la seguridad
                                            alimentaria,
                                            la forma en que cultivamos es clave <br> para resolver algunos de los
                                            mayores problemas que enfrentamos
                                            hoy.</p>

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

                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg"
                            style="background-image: url('{{ asset('images/hero-images/slider-segundo-1905x511.png') }}');">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__sub-title-bx">
                                            <img class="main-slider-one__tree-icon"
                                                src="{{ asset('images/shapes/hero-tree-icon1-1.png') }}"
                                                alt="agrofa">
                                            <h5 class="main-slider-one__sub-title">Calidad Certificada </h5>
                                        </div>
                                        <!-- slider-sub-title -->
                                        <h1 class="main-slider-one__title">Garantizamos calidad certificada en cada
                                            paso del proceso.</h1>
                                        <!-- slider-title -->
                                        <p class="main-slider-one__info-text">De la emergencia climática a la seguridad
                                            alimentaria,
                                            la forma en que cultivamos es clave <br> para resolver algunos de los
                                            mayores problemas que enfrentamos
                                            hoy.</p>
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

        <!-- Feature Start -->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <div class="feature-one__col-item col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item-bg">
                                <div class="feature-one__cricle-icon">
                                    <i class="icon-crops feature-one__icon" aria-hidden="true"></i>
                                </div>
                                <h3 class="feature-one__title">
                                    Tienda de alimentos orgánicos de calidad</h3>
                            </div>
                        </div><!-- feature-item -->
                    </div>

                    <div class="feature-one__col-item col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item-bg">
                                <div class="feature-one__cricle-icon">
                                    <i class="icon-hand feature-one__icon" aria-hidden="true"></i>
                                </div>
                                <h3 class="feature-one__title">Estándares de Calidad <br> Servicios</h3>
                            </div>
                        </div><!-- feature-item -->
                    </div>

                    <div class="feature-one__col-item col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item-bg">
                                <div class="feature-one__cricle-icon">
                                    <i class="icon-tractor feature-one__icon" aria-hidden="true"></i>
                                </div>
                                <h3 class="feature-one__title">
                                    Comida ecológica directamente de la agricultora.</h3>
                            </div>
                        </div><!-- feature-item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->

        <section class="food-one" id="Nosotros">
            <div class="container">
                <div class="row food-one__content-bx">
                    <div class="food-one__left fadeInLeft wow" data-wow-delay="1200ms">
                        <div class="section-common-title">
                            <span class="food-one__chose-reasone food-chose-reasone">
                                <img class="food-one__chose-icon food-chose-icon"
                                    src="{{ asset('images/shapes/food-img1-1.png') }}" alt="">
                                <strong class="food-one__chose-name food-chose-name">TU RAZÓN PARA ELEGIRNOS</strong>
                            </span>
                            <h2 class="food-one__title food-chose-title">Calidad, compromiso y excelencia en cada
                                envío.</h2>
                            <p class="food-one__text food-chose-text">
                                Somos una empresa dedicada al empacado y exportación de productos agrícolas, con una
                                trayectoria sólida y un compromiso firme con la excelencia y la satisfacción del
                                cliente.</p>
                        </div>

                        <div class="food-one__featurebx">
                            <div class="food-one__col">
                                <div class="food-one__cricle">
                                    <i class="icon-medal food-one__icon" aria-hidden="true"></i>
                                </div>
                                <div class="food-one__quality-info-bx">
                                    <h6 class="food-one__quality-title">Orgánica 100% garantizada</h6>
                                    <p class="food-one__quality-info"> Empacando y exportando productos agrícolas como
                                        frijoles y maíz con Brelom.</p>
                                </div>
                            </div>
                            <div class="food-one__col">
                                <div class="food-one__cricle">
                                    <i class="icon-crops food-one__icon" aria-hidden="true"></i>
                                </div>
                                <div class="food-one__quality-info-bx">
                                    <h6 class="food-one__quality-title">Saludables de primera calidad</h6>
                                    <p class="food-one__quality-info"> Nuestros productos agrícolas como frijoles y
                                        maíz se destacan por su calidad y frescura.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-one__right fadeInRight wow" data-wow-delay="1200ms">
                        <div class="food-one__right-img">
                            <img src="{{ asset('images/resources/about-brolem.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.food-one -->

        <section class="why-choose-one" id="Servicios">
            <div class="container">
                <div class="section-common-title fadeInDown wow" data-wow-delay="800ms">
                    <span class="why-choose-one__chose-reasone food-chose-reasone">
                        <img class="why-choose-one__chose-icon food-chose-icon"
                            src="{{ asset('images/shapes/food-img1-1.png') }}" alt="">
                        <strong class="why-choose-one__chose-name food-chose-name">POR QUÉ ELEGIRNOS</strong>
                    </span>
                    <h2 class="why-choose-one__title food-chose-title">Ofrecemos servicios de empacado y exportacion
                    </h2>
                </div>

                <div class="row why-choose-one__row">
                    <div class="why-choose-one__col col-xl-3 wow fadeIn" data-wow-delay="1100ms">
                        <div class="why-choose-one__bg">
                            <div class="why-choose-one__bg-inner">
                                <div class="why-choose-one__top">
                                    <div class="why-choose-one__icon-bx">
                                        <i class="icon-apple why-choose-one__icon"></i>
                                    </div>

                                    <div class="why-choose-one__top__right">
                                        <h6 class="why-choose-one__name">Agriculture <br> Products</h6>
                                    </div>
                                </div>

                                <div class="why-choose-one__content">
                                    <p class="why-choose-one__descript">Welcome to Dosner Organic Farms.We are a direct
                                        distributor of 100% Organic herbs produce.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="why-choose-one__col col-xl-3 wow fadeIn" data-wow-delay="1200ms">
                        <div class="why-choose-one__bg">
                            <div class="why-choose-one__bg-inner">
                                <div class="why-choose-one__top">
                                    <div class="why-choose-one__icon-bx">
                                        <i class="icon-crop why-choose-one__icon"></i>
                                    </div>

                                    <div class="why-choose-one__top__right">
                                        <h6 class="why-choose-one__name">Fresh <br> Vegetables</h6>
                                    </div>
                                </div>

                                <div class="why-choose-one__content">
                                    <p class="why-choose-one__descript">Welcome to Dosner Organic Farms.We are a direct
                                        distributor of 100% Organic herbs produce.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="why-choose-one__col col-xl-3 wow fadeIn" data-wow-delay="1500ms">
                        <div class="why-choose-one__bg">
                            <div class="why-choose-one__bg-inner">
                                <div class="why-choose-one__top">
                                    <div class="why-choose-one__icon-bx">
                                        <i class="icon-medicine why-choose-one__icon"></i>
                                    </div>

                                    <div class="why-choose-one__top__right">
                                        <h6 class="why-choose-one__name">Dairy <br> Products</h6>
                                    </div>
                                </div>

                                <div class="why-choose-one__content">
                                    <p class="why-choose-one__descript">Welcome to Dosner Organic Farms.We are a direct
                                        distributor of 100% Organic herbs produce.</p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="why-choose-one__col col-xl-3 wow fadeIn" data-wow-delay="1700ms">
                        <div class="why-choose-one__bg">
                            <div class="why-choose-one__bg-inner">
                                <div class="why-choose-one__top">
                                    <div class="why-choose-one__icon-bx">
                                        <i class="icon-crops why-choose-one__icon"></i>
                                    </div>

                                    <div class="why-choose-one__top__right">
                                        <h6 class="why-choose-one__name">Organic <br> Corn</h6>
                                    </div>
                                </div>

                                <div class="why-choose-one__content">
                                    <p class="why-choose-one__descript">Welcome to Dosner Organic Farms.We are a direct
                                        distributor of 100% Organic herbs produce.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-choose-one__more-choose">
                <div class="why-choose-one__more-choose--bg">
                    <h4 class="why-choose-one__more-choose--title">Somos principales empacadores y exportadores de
                        productos agrícolas especializada en frijoles y maíz.</h4>
                    <div class="why-choose-one__more-choose--btn">
                        <a href="#contact" class="agrofa-btn why-choose-more--btn"><span>Contactanos</span></a>
                    </div>
                </div>
            </div>
        </section><!-- /.why-choose-one -->

        <section class="eco-services-one jarallax" data-jarallax="" data-speed="0.3" data-imgposition="50% -100%"
            style="background-image: url('{{ asset('images/hero-images/slider-primero-1905x474.png') }}')">
            <div class="eco-services-one__wrap container">
                <div class="row eco-services-one__bx">

                </div>
            </div>
        </section><!-- /.eco-services-one -->

        <section class="work-learn-one">
            <div class="eco-services-one--label">
                <div class="eco-services-one--label__inner">
                    <img class="eco-services-one--label__logo-shape"
                        src="{{ asset('images/shapes/eco-organic-shape1-1.png') }}" alt="">
                    <div class="eco-services-one--label__logo-bx">
                        <img class="eco-services-one--label__logo" src="{{ asset('images/USDA_organic_seal.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="container work-learn-one__wrap">
                <div class="section-common-title">
                    <span class="work-learn-one__chose-reasone food-chose-reasone fadeInLeft wow"
                        data-wow-delay="200ms">
                        <img class="work-learn-one__chose-icon food-chose-icon"
                            src="{{ asset('images/shapes/food-img1-1.png') }}" alt="">
                        <strong class="work-learn-one__chose-name food-chose-name">
                            NUESTRO PROCESO DE LIMPIEZA</strong>
                    </span>
                    <h2 class="work-learn-one__title food-chose-title fadeInLeft wow" data-wow-delay="200ms">Cómo
                        hacemos el proceso de empaquetado</h2>
                    <p class="work-learn-one__text food-chose-text fadeInRight wow" data-wow-delay="200ms">El
                        consumidor moderno exige productos orgánicos de calidad, es por eso que nuestra selección de
                        Frijoles/Maiz y productos cultivados son de primera calidad, siempre frescos y 100%
                        certificados orgánicos.</p>
                </div>
                <div class="work-learn-one__bx">
                    <div class="work-learn-one__col fadeIn wow" data-wow-delay="100ms">
                        <div class="work-learn-one__inner">
                            <div class="work-learn-one__img">
                                <div class="work-learn-one__inner-img"><img
                                        src="{{ asset('images/work-learn/work-learn1-1.png') }}" alt="">
                                </div>
                            </div>
                            <h5 class="work-learn-one__work-title">Our Plan</h5>
                        </div>
                    </div>

                    <div class="work-learn-one__col fadeIn wow" data-wow-delay="200ms">
                        <div class="work-learn-one__inner">
                            <div class="work-learn-one__img">
                                <div class="work-learn-one__inner-img"><img
                                        src="{{ asset('images/work-learn/work-learn1-2.png') }}" alt="">
                                </div>
                            </div>
                            <h5 class="work-learn-one__work-title">Expert Farmer</h5>
                        </div>
                    </div>

                    <div class="work-learn-one__col fadeIn wow" data-wow-delay="300ms">
                        <div class="work-learn-one__inner">
                            <div class="work-learn-one__img">
                                <div class="work-learn-one__inner-img"><img
                                        src="{{ asset('images/work-learn/work-learn1-3.png') }}" alt="">
                                </div>
                            </div>
                            <h5 class="work-learn-one__work-title">Quality Pdoduct</h5>
                        </div>
                    </div>

                    <div class="work-learn-one__col fadeIn wow" data-wow-delay="400ms">
                        <div class="work-learn-one__inner">
                            <div class="work-learn-one__img">
                                <div class="work-learn-one__inner-img"><img
                                        src="{{ asset('images/work-learn/work-learn1-4.png') }}" alt="">
                                </div>
                            </div>
                            <h5 class="work-learn-one__work-title">We Deliver</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.work-learn-one -->

        <section class="testimonials-one testimonials-one--home" id="Testimonios">
            <div class="container">
                <div class="section-common-title">
                    <span class="testimonials-one__chose-reasone food-chose-reasone fadeInLeft wow"
                        data-wow-delay="1200ms">
                        <img class="testimonials-one__chose-icon food-chose-icon"
                            src="{{ asset('images/shapes/food-img1-1.png') }}" alt="">
                        <strong class="testimonials-one__chose-name food-chose-name">TESTIMONIO DEL CLIENTE</strong>
                    </span>
                    <h2 class="testimonials-one__title food-chose-title fadeInLeft wow" data-wow-delay="1200ms">¿Qué
                        tiene que decir el cliente?</h2>
                </div>

                <div class="testimonials-one__carousel agrofa-owl__carousel agrofa-owl__carousel--with-shadow agrofa-owl__carousel--basic-nav owl-carousel"
                    data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
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
					"items": 2,
					"margin": 15
				},
				"992": {
					"items": 3,
					"margin": 15
				}
			}
		}'>
                    <div class="item">
                        <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='000ms'>
                            <div class="testimonials-card__inner">
                                <div class="testimonials-card__top">
                                    <div class="testimonials-card__image">
                                        <img src="{{ asset('images/resources/testimonial-owner1-1.png') }}"
                                            alt="Anono Wiliam ">
                                        <div class="testimonials-card__icon-qoute">
                                            <i class="icon-qoute"></i>
                                        </div>
                                    </div><!-- /.testimonials-card__image -->
                                    <div class="testimonials-card__top__left">
                                        <h6 class="testimonials-card__name">
                                            Anono Wiliam
                                        </h6><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Organic Real Farmer CA</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__top__left -->
                                </div><!-- /.testimonials-card__top -->
                                <div class="testimonials-card__rating">
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                </div><!-- /.testimonials-card__rating -->
                                <div class="testimonials-card__content">
                                    Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                </div><!-- /.testimonials-card__content -->
                            </div><!-- /.testimonials-card__inner -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='100ms'>
                            <div class="testimonials-card__inner">
                                <div class="testimonials-card__top">
                                    <div class="testimonials-card__image">
                                        <img src="{{ asset('images/resources/testimonial-owner1-2.png') }}"
                                            alt="Hamis Hamza">
                                        <div class="testimonials-card__icon-qoute">
                                            <i class="icon-qoute"></i>
                                        </div>
                                    </div><!-- /.testimonials-card__image -->
                                    <div class="testimonials-card__top__left">
                                        <h6 class="testimonials-card__name">
                                            Hamis Hamza
                                        </h6><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Organic Real Farmer CA</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__top__left -->
                                </div><!-- /.testimonials-card__top -->
                                <div class="testimonials-card__rating">
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                </div><!-- /.testimonials-card__rating -->
                                <div class="testimonials-card__content">
                                    Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                </div><!-- /.testimonials-card__content -->
                            </div><!-- /.testimonials-card__inner -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='200ms'>
                            <div class="testimonials-card__inner">
                                <div class="testimonials-card__top">
                                    <div class="testimonials-card__image">
                                        <img src="{{ asset('images/resources/testimonial-owner1-3.png') }}"
                                            alt="Tony Hanson">
                                        <div class="testimonials-card__icon-qoute">
                                            <i class="icon-qoute"></i>
                                        </div>
                                    </div><!-- /.testimonials-card__image -->
                                    <div class="testimonials-card__top__left">
                                        <h6 class="testimonials-card__name">
                                            Tony Hanson
                                        </h6><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Organic Real Farmer CA</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__top__left -->
                                </div><!-- /.testimonials-card__top -->
                                <div class="testimonials-card__rating">
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                </div><!-- /.testimonials-card__rating -->
                                <div class="testimonials-card__content">
                                    Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                </div><!-- /.testimonials-card__content -->
                            </div><!-- /.testimonials-card__inner -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='000ms'>
                            <div class="testimonials-card__inner">
                                <div class="testimonials-card__top">
                                    <div class="testimonials-card__image">
                                        <img src="{{ asset('images/resources/testimonial-owner1-1.png') }}"
                                            alt="Anono Wiliam ">
                                        <div class="testimonials-card__icon-qoute">
                                            <i class="icon-qoute"></i>
                                        </div>
                                    </div><!-- /.testimonials-card__image -->
                                    <div class="testimonials-card__top__left">
                                        <h6 class="testimonials-card__name">
                                            Anono Wiliam
                                        </h6><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Organic Real Farmer CA</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__top__left -->
                                </div><!-- /.testimonials-card__top -->
                                <div class="testimonials-card__rating">
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                </div><!-- /.testimonials-card__rating -->
                                <div class="testimonials-card__content">
                                    Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                </div><!-- /.testimonials-card__content -->
                            </div><!-- /.testimonials-card__inner -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='100ms'>
                            <div class="testimonials-card__inner">
                                <div class="testimonials-card__top">
                                    <div class="testimonials-card__image">
                                        <img src="{{ asset('images/resources/testimonial-owner1-2.png') }}"
                                            alt="Hamis Hamza">
                                        <div class="testimonials-card__icon-qoute">
                                            <i class="icon-qoute"></i>
                                        </div>
                                    </div><!-- /.testimonials-card__image -->
                                    <div class="testimonials-card__top__left">
                                        <h6 class="testimonials-card__name">
                                            Hamis Hamza
                                        </h6><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Organic Real Farmer CA</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__top__left -->
                                </div><!-- /.testimonials-card__top -->
                                <div class="testimonials-card__rating">
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                    <i class="icon-star1"></i>
                                </div><!-- /.testimonials-card__rating -->
                                <div class="testimonials-card__content">
                                    Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                </div><!-- /.testimonials-card__content -->
                            </div><!-- /.testimonials-card__inner -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                </div><!-- /.testimonials-one__carousel -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

        <section class="opening">
            <div class="container">
                <div class="opening__wrapper">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="opening__info-row text-center">
                                <div class="opening__info-row__icon"><i class="icon-phone"></i></div>
                                <div class="opening__info-row__content">
                                    <span class="opening__info-row__support-text">Línea de ayuda y soporte</span>
                                    <p class="opening__info-row__support-number"><a href="tel:+88013004451">+88 013
                                            00
                                            44 51 </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="opening__info-row text-center">
                                <div class="opening__info-row__icon"><i class="icon-location"></i></div>
                                <div class="opening__info-row__content">
                                    <span class="opening__info-row__support-text">Nuestra Dirección</span>
                                    <p class="opening__info-row__support-number">Lima - Perú</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="opening__info-row text-center">
                                <div class="opening__info-row__icon"><i class="icon-email"></i></div>
                                <div class="opening__info-row__content">
                                    <span class="opening__info-row__support-text">Enviar un correo electrónico</span>
                                    <p class="opening__info-row__support-number"><a
                                            href="mailto:Support@gmail.com">Support@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.opening -->

        <footer class="main-footer background-black-2">
            <div class="main-footer__bg background-black-2"
                style="background-image: url({{ asset('images/shapes/footer-shape1-1.png') }});"></div>
            <!-- /.main-footer__bg -->
            <div class="main-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="footer-widget__col footer-widget__col__col1">
                            <div class="footer-widget footer-widget--about">
                                <a href="{{ url('/') }}" class="footer-widget__logo">
                                    <img src="{{ asset('images/brolemlogo.png') }}" width="155"
                                        alt="Agrofa HTML Template">
                                </a>
                                <p class="footer-widget__experience-text">Somos principales empacadores y exportadores
                                    de productos agrícolas especializada en frijoles y maíz.</p>

                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->

                        <div class="footer-widget__col  footer-widget__col__col2">
                            <div class="footer-widget footer-widget--links">
                                <h5 class="footer-widget__title">Links</h5>
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="#">Agriculture Foods</a></li>
                                    <li><a href="#">Organic Vegetables</a></li>
                                    <li><a href="#">Pond & Sea Fish</a></li>
                                    <li><a href="#">Fertilizer</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                        <div class="footer-widget__col  footer-widget__col__col3">
                            <div class="footer-widget footer-widget--explore">
                                <h5 class="footer-widget__title">Explore Link</h5><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="#">Cookie Policy</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">About us</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__top -->

            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright"> &copy; <span class="dynamic-year"></span> Brolem
                            Derechos reservados</p>
                        <div class="main-footer__social-row">
                            <p class="main-footer__social-row-text">Social</p>
                            <ul class="main-footer__social-list">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ url('/') }}" aria-label="logo image"><img
                        src="{{ asset('images/logo-light.png') }}" width="155" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@agrofa.com">needhelp@agrofa.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
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
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="agrofa-btn agrofa-btn--base">
                    <span><i class="icon-search1"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">Regresar</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <script src="{{ asset('vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendors/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('js/agrofa.js') }}"></script>
</body>

</html>
