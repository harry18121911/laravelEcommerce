<!DOCTYPE html>
<html>

<head>
@vite('resources/css/app.css')

</head>
<body>

  <div class=" mx-2 rounded-3xl">
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

    <!-- footer section -->

@include("home.footer")
    <!-- footer section -->


  <!-- end info section -->


</body>

</html>
