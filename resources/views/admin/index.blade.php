<!DOCTYPE html>
<html>
  <head>
    @include("admin.css")
  </head>
  <body>
    <script src="https://cdn.tailwindcss.com"></script>
    @include("admin.header")

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include("admin.sidebar")
      <!-- Sidebar Navigation end-->

    @include("admin.body")
    </div>
    <!-- JavaScript files-->

  </body>
</html>
