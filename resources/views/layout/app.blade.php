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

    @yield('styles')

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
                            <a href="mailto:marbrocos@brolem.pe">marbrocos@brolem.pe</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="fas fa-phone topbar-one__info__icon"></i>
                            <a href="tel:+51998347307">+51 998 347 307</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->


        <header class="main-header sticky-header sticky-header--one-page" style="display: none;">
            <div class="container-fluid">
                <div class="main-header__inner">

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="dropdown megamenu scrollToLink current">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="scrollToLink"><a href="{{ route('about_us') }}">About Us</a></li>
                            <li class="scrollToLink">
                                <a href="javascript:void(0)">Services</a>
                                <ul>
                                    <li><a href="services.html">Services</a></li>
                                    <li> <a href="service-d-organic-fresh-fruits.html">Organic Fresh Fruits</a></li>
                                </ul>
                            </li>
                            <li class="scrollToLink"><a href="{{ route('our_process') }}">Our Process</a></li>
                            <li class="scrollToLink"><a href="{{ route('contact_us') }}">Contact Us</a></li>
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
                    </div><!-- /.topbar-one__social -->

                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="icon-location topbar-one__info__icon"></i>
                            <a href="#">Lima - Perú</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="icon-email topbar-one__info__icon"></i>
                            <a href="mailto:marbrocos@brolem.pe">marbrocos@brolem.pe</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="icon-phone topbar-one__info__icon"></i>
                            <a href="tel:+51998347307">+51 998 347 307</a>
                        </li>
                        <!--<li class="topbar-one__info__item">
                            <i class="icon-clock topbar-one__info__icon"></i>
                            <a href="#">Mon - Sat: 09.00 to 06.00</a>
                        </li>-->
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <p class="topbar-one__right-text">Packaging and Exportation of Agricultural Products</p>
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
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="scrollToLink"><a href="{{ route('about_us') }}">About Us</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)">Our Products</a>
                                <ul class="sub-menu">P
                                    <li><a href="our-farmer.html">Andean Grains</a></li>
                                    <li><a href="our-farmer-carousel.html">Beans</a></li>
                                </ul>
                            </li>
                            <li class="scrollToLink"><a href="{{ route('our_process') }}">Our Process</a></li>
                            <li class="scrollToLink"><a href="{{ route('contact_us') }}">Contact Us</a></li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->

        @yield('content')


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
                                <p class="footer-widget__experience-text">We are main packers and exhibitors of agricultural products specializing in beans and corn.</p>

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
