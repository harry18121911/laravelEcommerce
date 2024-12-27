<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
    <style type="text/css">



    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')

    </div>
    <section class="shop_section layout_padding">
        <div class="">
            <div class="text-center text-3xl p-8 ">
                <h2>
                    Product Details
                </h2>
            </div>
            <div class="">

                <div class="col-auto text-3xl">
                    <div class="mx-auto container bg-red-100">
                        <a href="">
                            <div class="flex justify-center items-center p-8">
                                <img width="400px" src="/products/{{ $product->image }}" alt="">
                            </div>
                            <div class="p-4 flex justify-between " >
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
                            <div class="p-4 flex justify-between">
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

                            <div class="p-4">
                                <p>{{ $product->description}}</p>
                            </div>

                        </a>
                    </div>
                </div>


            </div>
            <div class="text-center text-3xl p-28">
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href={{url("/")}}>
                    View All Products
                </a>
            </div>
        </div>
    </section>

 @include("home.footer")



</body>

</html>
