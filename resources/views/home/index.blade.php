<!DOCTYPE html>
<html>

<head>
@vite('resources/css/app.css')

</head>
<body>

  <div class=" container mx-auto md:mx-auto lg:mx-auto xl:mx-auto 2xl:mx-auto rounded-3xl">
    <!-- header section strats -->
   @include("home.header")
    <!-- end header section -->
    <!-- slider section -->

    @include("home.slider")

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
  @include("home.shop")


  <!-- end shop section -->

  <!-- contact section -->

 @include("home.contact")

  <!-- end contact section -->



  <!-- info section -->

@include("home.info")
    <!-- footer section -->

@include("home.footer")
    <!-- footer section -->


  <!-- end info section -->


</body>

</html>
