@extends('layout/app')

@section('content')
    <section class="get-touch-one" id="contact">
        <div class="container">
            <div class="row get-touch-one__row">
                <div class="get-touch-one__content col-md-6 col-sm-12">
                    <div class="section-common-title fadeInDown wow" data-wow-delay="100ms">
                        <h2 class="get-touch-one__title food-chose-title">REACH US SEND A MESSAGE</h2>
                        <ul class="list-unstyled get-touch-one__contact-info">
                            <li class="get-touch-one__info__contact-item">
                                <i class="icon-location get-touch-one__contact__icon"></i>
                                <div class="get-touch-one__contact-support">
                                    <small class="get-touch-one__contact--text">OUR MAIN OFFICE</small>
                                    <a href="javascript:void(0)">JR Francia N° 187</a>
                                    <a href="javascript:void(0)">La Victoria, Lima - Perú</a>
                                </div>
                            </li>
                            <li class="get-touch-one__info__contact-item">
                                <i class="icon-location get-touch-one__contact__icon"></i>
                                <div class="get-touch-one__contact-support">
                                    <small class="get-touch-one__contact--text">OUR FACILITIES</small>
                                    <a href="javascript:void(0)">1. JR Francia N° 187 La Victoria, Lima - Perú.</a>
                                    <a href="javascript:void(0)">2. JR San Pablo N° 226 La Victoria, Lima - Perú.</a>
                                </div>
                            </li>

                            <li class="get-touch-one__info__contact-item">
                                <i class="icon-phone get-touch-one__contact__icon"></i>
                                <div class="get-touch-one__contact-support">
                                    <small class="get-touch-one__contact--text">PHONE NUMBER</small>
                                    <a href="javascript:void(0)">+51 998 347 307</a>
                                </div>
                            </li>

                            <li class="get-touch-one__info__contact-item">
                                <i class="icon-email get-touch-one__contact__icon"></i>
                                <div class="get-touch-one__contact-support">
                                    <small class="get-touch-one__contact--text">EMAIL ADDRESS</small>
                                    <a href="javascript:void(0)">marbrocos@brolem.pe</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="get-touch-one__form col-md-6 col-sm-12">
                    <form class="contact-form-validated">
                        @csrf
                        <div class="get-touch-one__form-row w-100">
                            <div class="get-touch-one__form-group col-sm-12">
                                <input type="text" name="name" class="get-touch-one__field" placeholder="Name">
                                <div class="get-touch-one__field-bd-effect"></div>
                            </div>
                            <div class="get-touch-one__form-group col-sm-12">
                                <input type="text" name="company" class="get-touch-one__field" placeholder="Company">
                                <div class="get-touch-one__field-bd-effect"></div>
                            </div>
                            <div class="get-touch-one__form-group col-sm-12">
                                <input type="email" name="email" class="get-touch-one__field" placeholder="Email">
                                <div class="get-touch-one__field-bd-effect"></div>
                            </div>
                            <div class="get-touch-one__form-group col-sm-12">
                                <input type="text" name="phone" class="get-touch-one__field" placeholder="Phone">
                                <div class="get-touch-one__field-bd-effect"></div>
                            </div>
                            <div class="get-touch-one__form-group col-sm-12">
                                <textarea name="message" class="get-touch-one__field textarea--field" placeholder="Message"></textarea>
                                <div class="get-touch-one__field-bd-effect"></div>
                            </div>
                            <div class="form-submit-btn-wrap">
                                <button class="form-submit-btn" type="submit">Send A Message</button>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </section><!-- /.get-touch-one -->


    <section class="contact-map">
        <div class="container-fluid">
            <div class="google-map google-map__contact">
                <iframe title="template google map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.8062584566394!2d-77.01034264014073!3d-12.070159754416673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7083c818a75%3A0x2d4b84efb59ced8c!2sJr.%20Francia%201873%2C%20La%20Victoria%2015018!5e0!3m2!1ses!2spe!4v1717222943896!5m2!1ses!2spe"
                    class="map__contact" allowfullscreen=""></iframe>
            </div>
            <!-- /.google-map -->
        </div><!-- /.container-fluid -->
    </section><!-- /.contact-map -->
@endsection()

@section('styles')
@endsection()

@section('scripts')
 
@endsection
