@extends('layout/app')

@section('content')
    <section class="portfolio">

        <main class="mainContainer">

            <!--  *****  Buttons Section Starts  *****  -->
            <div class="button-group">
                <button class="button active" data-filter="*">All</button>
                <button class="button" data-filter=".whiteQ">WHIITE QUINOA</button>
                <button class="button" data-filter=".redQ">RED QUINOA</button>
                <button class="button" data-filter=".blackQ">BLACK QUINOA</button>
                <button class="button" data-filter=".tricolorQ">TRI-COLOR QUINOA</button>
                <button class="button" data-filter=".blackChiaS">BLACK CHIA SEEDS</button>
                <button class="button" data-filter=".amaranth">AMARANTH </button>
            </div>

            <div class="gallery">

                <div class="item whiteQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/1/IMG_2854.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item whiteQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/1/IMG_2818.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item redQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/2/IMG_2880.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item redQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/2/IMG_2856.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item blackQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/3/IMG_2881.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item blackQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/3/IMG_2858.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item tricolorQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/4/IMG_2889.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item tricolorQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/4/IMG_2886.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item blackChiaS">
                    <img src="{{ asset('images/brolem/MENESTRAS/5/IMG_2895.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item blackChiaS">
                    <img src="{{ asset('images/brolem/MENESTRAS/5/IMG_2891.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item amaranth">
                    <img src="{{ asset('images/brolem/MENESTRAS/6/IMG_2900.webp') }}">
                    <div class="overlay">
                        <a href="#">VIEW MORE</a>
                    </div>
                </div>

                <div class="item amaranth">
                    <img src="{{ asset('images/brolem/MENESTRAS/6/IMG_2897.webp') }}">
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
