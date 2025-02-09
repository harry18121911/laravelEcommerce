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

        <h1 class="text-5xl font-extrabold ">TESTIMONIALS</h1>
    </div>
    <div class=" flex flex-row mt-6 flex-wrap justify-around">
        <div class=" bg-red-200 flex flex-col items-center m-10 p-20 space-y-10 w-96 rounded-xl">


            <h1 class="text-5xl">Carl Sagan</h1>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni, tempore voluptatem nisi
                deleniti sequi quasi? Culpa libero consectetur voluptatibus, nam, perferendis, illum provident nobis
                exercitationem commodi architecto cumque et!</p>
        </div>
        <div class="bg-red-200 flex flex-col items-center m-10 p-20 space-y-10 w-96 rounded-xl">


            <h1 class="text-5xl">Gordon Freeman</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni, tempore voluptatem nisi
                deleniti sequi quasi? Culpa libero consectetur voluptatibus, nam, perferendis, illum provident nobis
                exercitationem commodi architecto cumque et!</p>
        </div>
        <div class="bg-red-200 flex flex-col items-center m-10 p-20 space-y-10 w-96 rounded-xl">

            <h1 class="text-5xl">Michael Jordan</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni, tempore voluptatem nisi
                deleniti sequi quasi? Culpa libero consectetur voluptatibus, nam, perferendis, illum provident nobis
                exercitationem commodi architecto cumque et!</p>
        </div>
    </div>


    @include('home.footer')



</body>

</html>
