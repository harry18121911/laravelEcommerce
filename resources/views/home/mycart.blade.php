<!DOCTYPE html>
<html>

<head>
 @include("home.css")

 <style>
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    table{
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }

    th{
        border:2px solid black;
        text-align: center;
        color: white;
        font: 20px;
        font-weight:bold;
        background-color: black;
    }

    td{
        border: 1px solid skyblue;
    }

 </style>
</head>

<body>
  <div class="hero_area">
   @include("home.header")

  </div>

   <div class="div_deg">
    <table>
        <tr>
            <th>Product Title</th>
            <th>Price</th>
            <th>Image</th>
        </tr>

        @foreach ($cart as $cart )
        <tr>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->price}}</td>
            <td><img width="150px"  src="/products/{{$cart->product->image}}" alt=""></td>
        </tr>
        @endforeach



    </table>
  </div>


  {{-- @foreach ($cart as $carts )

  {{$carts->user_id}}
    <h1> {{$carts->product_id}}</h1>
    <h1> {{$carts->product->title}}</h1>
    <h1> {{$carts->user->name}}</h1>

  @endforeach --}}


@include("home.info")

  <script src="{{asset("js/bootstrap.js")}}"></script>
  <script src="{{asset("js/jquery-3.4.1.min.js")}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owlcarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset("js/custom.js")}}"></script>

</body>

</html>
