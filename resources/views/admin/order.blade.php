<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        table {
            border: 2px solid skyblue;
            text-align: center;
        }

        th {
            background-color: skyblue;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        td {
            color: white;
            padding: 10px;
            border: 2px solid skyblue
        }

        .table_center {
            display: flex;
            justify-content: center;
            align-self: center;
        }
    </style>
</head>

<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <div class="page-content">
            <div class="page-header">
                <div class="containter-fluid">

                    <div class="table_center">


                        <table>
                            <tr>
                                <th>Customer name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Product title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Change Status</th>
                            </tr>

                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->rec_address }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->product->title }}</td>
                                    <td>{{ $data->product->price }}</td>
                                    <td>
                                        <img width="150" src="products/{{ $data->product->image }}" alt="">
                                    </td>
                                    <td>{{ $data->status }}</td>

                                    <td>
                                        <form action="{{url('on_the_way', $data->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary" href="">On the way.</button>
                                        </form>
                                        <form action="{{url('delivered', $data->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success" href="">Delivered</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>


            </div>
        </div>
        <!-- Sidebar Navigation end-->
    </div>
    <!-- JavaScript files-->
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
