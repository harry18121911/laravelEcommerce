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

        <h1 class="text-5xl font-extrabold ">CONTACT US</h1>
    </div>
    <div class="flex flex-col mt-6 items-center mx-8">

                    <div class="w-full">
                      <iframe class="w-full" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" allowfullscreen></iframe>
                    </div>



                <div class="w-full">
                  <form class="w-full" action="">
                    <div class="w-full">
                      <input class="w-full" type="text" placeholder="Name" />
                    </div>
                    <div class="w-full">
                      <input  class="w-full" type="email" placeholder="Email" />
                    </div>
                    <div class="w-full">
                      <input class="w-full" type="text" placeholder="Phone" />
                    </div>
                    <div class="w-full">
                      <input class="w-full" type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="w-full text-center">
                      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-6 px-10 rounded-full my-3">
                        SEND
                      </button>
                    </div>
                  </form>
                </div>



          <!-- end contact section -->

          <!-- info section -->

    </div>


    @include('home.footer')



</body>

</html>
