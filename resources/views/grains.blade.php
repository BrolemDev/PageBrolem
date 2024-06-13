@extends('layout/app')

@section('content')
    <section class="portfolio">

        <main class="mainContainer">

            <div class="button-group">
                <button class="button active" data-filter="*">All</button>
                <button class="button" data-filter=".whiteQ">WHIITE QUINOA</button>
                <button class="button" data-filter=".redQ">RED QUINOA</button>
                <button class="button" data-filter=".blackQ">BLACK QUINOA</button>
                <button class="button" data-filter=".tricolorQ">TRI-COLOR QUINOA</button>
                <button class="button" data-filter=".blackChiaS">BLACK CHIA SEEDS</button>
            </div>

            <div class="gallery">
                <div class="item whiteQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/1/IMG_2842.webp') }}">
                    <div class="overlay">
                        <a href="#" class="view-more" data-id="1">VIEW MORE</a>
                    </div>
                </div>

                <div class="item redQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/2/IMG_2875.webp') }}">
                    <div class="overlay">
                        <a href="#" class="view-more" data-id="2">VIEW MORE</a>
                    </div>
                </div>

                <div class="item blackQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/3/IMG_2882.webp') }}">
                    <div class="overlay">
                        <a href="#" class="view-more" data-id="3">VIEW MORE</a>
                    </div>
                </div>

                <div class="item tricolorQ">
                    <img src="{{ asset('images/brolem/MENESTRAS/4/IMG_2887.webp') }}">
                    <div class="overlay">
                        <a href="#" class="view-more" data-id="4">VIEW MORE</a>
                    </div>
                </div>

                <div class="item blackChiaS">
                    <img src="{{ asset('images/brolem/MENESTRAS/5/IMG_2892.webp') }}">
                    <div class="overlay">
                        <a href="#" class="view-more" data-id="5">VIEW MORE</a>
                    </div>
                </div>

            </div>

        </main>

    </section>

    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalles del Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar" id="closeModalButton">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
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
                                                    <img id="img_1">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img id="img_2">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img id="img_3">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img id="img_4">
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
                                                    <img id="img_thumb_1">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img id="img_thumb_2">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-details__images">
                                                    <img id="img_thumb_3">
                                                </div>
                                            </div>
                                        </div><!-- /.agrofa-tiny__slider -->
                                    </div>
                                </div><!-- /.column -->

                                <div class="product-details__content-col col-lg-6 col-xl-6 wow fadeInRight"
                                    data-wow-delay="300ms">
                                    <div class="product-details__content">
                                        <div class="product-details__top">
                                            <h3 class="product-details__title" id="title">WHIITE QUINOA</h3>
                                            <!-- /.product-title -->
                                            <div class="product-details__price">
                                                <small class="product-details__instock" id="code">HS Code:
                                                    1008.50.9000</small>
                                            </div><!-- /.product-price -->
                                        </div>
                                        <div class="product-details__excerpt">
                                            <p class="product-details__excerpt" id="description">Discover our Andean
                                                quinoa, sustainably sourced from Puno or Ayacucho, rich in protein,
                                                essential amino acids, and micronutrients. Meeting strict quality standards,
                                                it's offered in organic and conventional varieties, ideal for various
                                                culinary needs. </p>
                                            <ul class="product-details__feature product-details__delivery">
                                                <li><strong>Available Varieties:</strong> <span
                                                        id="available_varieties">Organic certified and conventional</span>
                                                </li>
                                                <li><strong>Availability:</strong> <span id="availability">All Year</span>
                                                </li>
                                                <li><strong>Main producing region: </strong> <span
                                                        id="main_producing_region">Puno, Ayacucho</span></li>
                                                <li><strong>Packing: </strong> Both packaging type and quantity are
                                                    customizable to suit individual customer specifications.</li>
                                            </ul>
                                            <div class="product-details__feature product-details__delivery mt-4">
                                                <h6 class="sidebar__title">BULK PACKING: </h6><!-- /.sidebar__title -->
                                                <div class="sidebar__tags" id="bulk_packing">
                                                    <a href="javascript:void(0)">25Kg</a>
                                                    <a href="javascript:void(0)">50Kg</a>
                                                    <a href="javascript:void(0)">950kg </a>
                                                </div>
                                            </div>

                                            <div class="product-details__feature product-details__delivery mt-5">
                                                <h6 class="sidebar__title">RETAIL PACKING: </h6><!-- /.sidebar__title -->
                                                <div class="sidebar__tags" id="retail_packing">
                                                    <a href="javascript:void(0)">950g</a>
                                                    <a href="javascript:void(0)">450g</a>
                                                    <a href="javascript:void(0)">Customizable </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script>
        const url = "{{ asset('json/products.json') }}";

        async function getProductById(productId) {
            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error('Failed to fetch products');
                }
                const data = await response.json();
                return data.products.find(product => product.id === parseInt(productId));
            } catch (error) {
                console.error('Error:', error);
                return null;
            }
        }

        document.querySelectorAll('.view-more').forEach(link => {
            link.addEventListener('click', async event => {
                event.preventDefault();
                const productId = event.target.dataset.id;
                const product = await getProductById(productId);
                if (product) {
                    displayProductDetails(product);
                }
            });
        });

        function displayProductDetails(product) {
            document.getElementById('title').textContent = product.name;
            document.getElementById('code').textContent = `HS Code: ${product.hs_code}`;
            document.getElementById('description').textContent = product.description;
            document.getElementById('available_varieties').textContent = product.available_varieties.join(', ');
            document.getElementById('availability').textContent = product.availability;
            document.getElementById('main_producing_region').textContent = product.main_producing_region.join(', ');

            const bulkPackingContainer = document.getElementById('bulk_packing');
            bulkPackingContainer.innerHTML = '';
            product.packing.bulk.forEach(size => {
                const sizeElement = document.createElement('a');
                sizeElement.href = "javascript:void(0)";
                sizeElement.textContent = size;
                bulkPackingContainer.appendChild(sizeElement);
            });

            const retailPackingContainer = document.getElementById('retail_packing');
            retailPackingContainer.innerHTML = '';
            product.packing.retail.forEach(size => {
                const sizeElement = document.createElement('a');
                sizeElement.href = "javascript:void(0)";
                sizeElement.textContent = size;
                retailPackingContainer.appendChild(sizeElement);
            });

            // Crear promesas para esperar a que todas las imágenes se carguen
            const img1Promise = loadImage(product.img1);
            const img2Promise = loadImage(product.img2);
            const img3Promise = loadImage(product.img3);

            // Esperar a que todas las imágenes se carguen antes de mostrar el modal
            Promise.all([img1Promise, img2Promise, img3Promise]).then(() => {
                // Todas las imágenes se han cargado, asignarlas a los elementos img
                document.getElementById('img_1').src = product.img1;
                document.getElementById('img_2').src = product.img2;
                document.getElementById('img_3').src = product.img3;
                document.getElementById('img_thumb_1').src = product.img1;
                document.getElementById('img_thumb_2').src = product.img2;
                document.getElementById('img_thumb_3').src = product.img3;

                // Mostrar el modal
                $("#modalCenter").modal('show');
            }).catch(error => {
                console.error('Error cargando imágenes:', error);
            });



            $("#modalCenter").modal('show');
        }

        function loadImage(src) {
            return new Promise((resolve, reject) => {
                const img = new Image();
                img.onload = () => {
                    resolve();
                };
                img.onerror = () => {
                    reject(new Error('Error al cargar la imagen: ' + src));
                };
                img.src = src;
            });
        }
    </script>
@endsection
