<!DOCTYPE html>
<html>
  <head>
    @vite('resources/css/app.css')
  </head>
  <body class="bg-slate-900 text-gray-300">
    @include("admin.header")

    <div class="flex">
    @include("admin.sidebar")

    @include("admin.body")
    </div>
  </body>
</html>
