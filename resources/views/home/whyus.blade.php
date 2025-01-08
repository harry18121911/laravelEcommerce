<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')

</head>

<body>

    <div class=" mx-2 rounded-3xl">
        @include('home.header')
        @include("home.slider")
    </div>


    <div class=" text-center mt-12">

        <h1 class="text-5xl font-extrabold ">WHY SHOP <br/> WITH US</h1>
    </div>
    <div class=" flex flex-row mt-6 flex-wrap justify-around">
        <div class=" bg-gray-400 flex flex-col items-center m-10 p-20 space-y-10 w-96 rounded-xl">

            <img class="w-16" src="{{ asset("images/truck_860059.png") }}" alt="Icono">

            <h1 class="text-5xl">Fast Delivery</h1>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni, tempore voluptatem nisi
                deleniti sequi quasi? Culpa libero consectetur voluptatibus, nam, perferendis, illum provident nobis
                exercitationem commodi architecto cumque et!</p>
        </div>
        <div class="bg-gray-400 flex flex-col items-center m-10 p-20 space-y-10 w-96 rounded-xl">
            <img  class="w-16" src="{{asset("images/free_778969.png")}}" alt="Icono">
            <h1 class="text-5xl">Free Shipping</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni, tempore voluptatem nisi
                deleniti sequi quasi? Culpa libero consectetur voluptatibus, nam, perferendis, illum provident nobis
                exercitationem commodi architecto cumque et!</p>
        </div>
        <div class="bg-gray-400 flex flex-col items-center m-10 p-20 space-y-10 w-96 rounded-xl">
            <img  class="w-16" src="{{asset("images/medal_4692991.png")}}" alt="Icono">
            <h1 class="text-5xl">Best Quality</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni, tempore voluptatem nisi
                deleniti sequi quasi? Culpa libero consectetur voluptatibus, nam, perferendis, illum provident nobis
                exercitationem commodi architecto cumque et!</p>
        </div>
    </div>


    @include('home.footer')



</body>

</html>
