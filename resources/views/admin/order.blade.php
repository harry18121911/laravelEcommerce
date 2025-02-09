<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-900 text-gray-300">
    @include('admin.header')

    <div class="">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <div class="">
            <div class="-header">
                <div class="">

                    <div class="flex justify-center items-center">
                        <table class="border-2 border-solid border-sky-400 text-center">
                            <tr>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Customer name</th>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Address</th>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Phone</th>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Product title</th>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Price</th>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Image</th>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Status</th>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Change Status</th>
                                <th class="bg-sky-300 p-4 text-xl font-bold text-white">Print PDF</th>
                            </tr>

                            @foreach ($data as $data)
                                <tr>
                                    <td class="text-white p-3 border-solid border">{{ $data->name }}</td>
                                    <td class="text-white p-3 border-solid border">{{ $data->rec_address }}</td>
                                    <td class="text-white p-3 border-solid border">{{ $data->phone }}</td>
                                    <td class="text-white p-3 border-solid border">{{ $data->product->title }}</td>
                                    <td class="text-white p-3 border-solid border">{{ $data->product->price }}</td>
                                    <td class="text-white p-3 border-solid border">
                                        <img width="150" src="products/{{ $data->product->image }}" alt="">
                                    </td>
                                    <td class="text-white p-3 border-solid border">
                                        @if ($data->status == 'in progress')
                                            <span style="color:red">{{ $data->status }}</span>
                                        @elseif($data->status == 'Delivered')
                                            <span style="color:green">{{ $data->status }}</span>
                                        @elseif($data->status == 'On the way')
                                            <span style="color:yellow">{{ $data->status }}</span>
                                        @endif
                                    </td>

                                    <td class="text-white p-3 border-solid border">
                                        <div class="flex justify-around">
                                            <form class="mr-2" action="{{ url('on_the_way', $data->id) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary" href="">On the
                                                    way.</button>
                                            </form>
                                            <form action="{{ url('delivered', $data->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success"
                                                    href="">Delivered</button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-white p-3 border-solid border">
                                        <form action="{{ url('print_pdf', $data->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-secondary" href="">Print
                                                PDF</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
