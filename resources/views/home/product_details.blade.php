<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style type="text/css">
        .div_center {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .detail-box {
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')

    </div>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Products
                </h2>
            </div>
            <div class="row">

                <div class=" col-md-10">
                    <div class="box">
                        <a href="">
                            <div class="div_center">
                                <img width="400px" src="/products/{{ $product->image }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    {{ $product->title }}
                                </h6>
                                <h6>
                                    Price
                                    <span>
                                        {{ "$" . $product->price }}
                                    </span>
                                </h6>
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Category: {{ $product->category }}
                                </h6>
                                <h6>
                                    Available Quantity
                                    <span>
                                        {{ $product->quantity }}
                                    </span>
                                </h6>
                            </div>

                            <div class="detail-box">
                                <p>{{ $product->description}}</p>
                            </div>

                        </a>
                    </div>
                </div>


            </div>
            <div class="btn-box">
                <a href={{url("/")}}>
                    View All Products
                </a>
            </div>
        </div>
    </section>

    @include('home.info')



    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owlcarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
