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

    .cart_value{
        text-align: center;
        margin-bottom: 70px;
        padding: 18px;
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

    .order_deg{
        padding-right: 100px;
        margin-top: -50;
    }

    label{
        display: inline-block;
        width: 150px;
    }

 </style>
</head>

<body>
  <div class="hero_area">
   @include("home.header")

  </div>

   <div class="div_deg">

    <div class="order_deg">
        <form action="{{url("confirm_order")}}" method="POST">
            @csrf
            <div class="div_gap">
                <label for="">Receiver Name</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>

            <div class="div_gap">
                <label for="">Receiver Adress</label>
                <textarea name="address">{{Auth::user()->address}}</textarea>
            </div>

            <div class="div_gap">
                <label for="">Receiver Phone</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>

            <div class="div_gap">
                <button class="btn btn-primary" type="submit" >Place Order</button>
            </div>

        </form>
    </div>


    <table>
        <tr>
            <th>Product Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>

        @php
            $value =0;
        @endphp

        @foreach ($cart as $carts )
        <tr>
            <td>{{$carts->product->title}}</td>
            <td>{{$carts->product->price}}</td>
            <td><img width="150px"  src="/products/{{$carts->product->image}}" alt=""></td>
            <td>
                <form action="{{url("delete_cart",$carts->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
        </td>
        </tr>

        @php
            $value = $value + $carts->product->price;
        @endphp
        @endforeach



    </table>
  </div>

  <div class="cart_value">
    <h3>Total Value of Cart is : ${{$value}}</h3>
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
