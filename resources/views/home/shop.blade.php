<section class="bg-gray-100 box-border rounded-3xl mt-8 mx-3 pb-8">
    <div class="">
        <div class="text-center text-3xl p-8">
            <h2>
                Latest Products
            </h2>
        </div>
        <div class="flex m-auto mx-10 justify-evenly">

            @foreach ($product as $products)
            <div class="flex">
                <div class="">
                    <a href="">
                        <div class="">
                            <img class="w-96 rounded-xl" src="/products/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6 class="text-2xl pt-2">
                                {{$products->title}}
                            </h6>
                            <h6 class="text-2xl pt-2">
                                Price $
                                <span>
                                    {{$products->price}}
                                </span>
                            </h6>
                        </div>
                        <div style="padding:15px">
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded2" href="{{url("product_details",$products->id)}}">Details</a>

                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded2" href="{{url("add_cart",$products->id)}}"> Add to Cart</a>
                        </div>
                    </a>
                </div>
            </div>

            @endforeach

        </div>
        <div class="text-center mt-10">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded2 py-2 px-4 " href="">
                View All Products
            </a>
        </div>
    </div>
</section>
