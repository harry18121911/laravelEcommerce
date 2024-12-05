@php
    declare(strict_types=1);
@endphp

<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        input[type="text"] {
            width: 400px;
            height: 50px;
        }

        label{
            display: inline-block;
            width: 200px;
            padding: 20px;
        }


        textarea{
            width: 400px;
            height: 80px;
        }
    </style>
</head>

<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                </div>
                <h1>Update Product</h1>
                <div class="div_deg">

                    <form action="{{url("update_product",$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label>Product Title</label>
                            <input type="text" name="title" value="{{ $product->title }}">
                        </div>

                        <div>
                            <label>Product Description</label>

                            <textarea name="description"> {{ $product->description }}</textarea>
                        </div>
                        <div>
                            <label>Product Price</label>
                            <input type="text" name="price" value="{{ $product->price }}">
                        </div>
                        <div>
                            <label>Product Quantity</label>

                            <input type="text" name="quantity" value="{{ $product->quantity }}">
                        </div>
                        <div>
                            <label>Product Category</label>

                            <select name="category">
                                <option value="{{$product->category}}">{{$product->category}}</option>
                                @foreach($category as $categorys)
                                <option value="{{$categorys->category_name}}">{{$categorys->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="">Image</label>
                            <img height="120" width="120" src="/products/{{ $product->image }}">
                        </div>
                        <div>
                            <label for="">New Image</label>
                            <input type="file" name="image">
                        </div>
                        <div>

                            <input class="btn btn-primary" type="submit" value="Update Product">
                        </div>
                    </form>
                </div>

                <!-- JavaScript files-->



                </script>
                <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
                <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
                <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
                <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
                <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
                <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
                <script src="{{ asset('/admincss/js/front.js') }}"></script>
</body>

</html>
