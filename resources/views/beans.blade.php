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
                    <img src="{{ asset('images/brolem/menestras/7/IMG_2902.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/menestras/8/IMG_2906.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/menestras/9/IMG_2911.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/menestras/10/IMG_2913.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/menestras/11/IMG_2919.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/menestras/12/IMG_2791.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/menestras/13/IMG_2927.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/menestras/14/IMG_2930.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/menestras/15/IMG_2935.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/menestras/16/IMG_2937.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item pulses">
                    <img src="{{ asset('images/brolem/menestras/17/IMG_2940.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item beans">
                    <img src="{{ asset('images/brolem/menestras/18/IMG_2943.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

            </div>

        </main>

    </section>
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
