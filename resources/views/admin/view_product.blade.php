<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-900 text-gray-300">
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                </div>

                <form action="{{ url('product_search') }}" method="get">
                    <input class="w-[500px] h-14 m-8 " type="search" name="search">
                    <input class="text-2xl" type="submit" value="Search">
                </form>



                <div class="flex justify-center items-center m-8">
                    <table class="text-center m-auto border-2 border-yellow-300 mt-12 w-[600px]">
                        <tr>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Product Title</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Description</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Category</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Image</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Price</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Quantity</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Edit</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Delete</th>
                        </tr>

                        @foreach ($product as $products)
                            <tr>
                                <td class="text-white p-3 border-solid border">{{ $products->title }}</td>
                                <td class="text-white p-3 border-solid border">{{ $products->description }}</td>
                                <td class="text-white p-3 border-solid border">{{ $products->category }}</td>
                                <td class="text-white p-3 border-solid border"> <img height="120" width="120"
                                        src="products/{{ $products->image }}"> </td>
                                <td class="text-white p-3 border-solid border">{{ "$" . $products->price }}</td>
                                <td class="text-white p-3 border-solid border">{{ $products->quantity }}</td>

                                <td class="text-white p-3 border-solid border">
                                    <form id="formUpdate" action="{{ url('edit_product', $products->id) }}"
                                        method="GET">
                                        @csrf
                                        <button type="submit" href=""
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-2xl">Edit</button>
                                    </form>
                                </td>

                                <td class="text-white p-3 border-solid border">
                                    <form id="formDelete" action="{{ url('delete_product', $products->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" href=""
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-2xl"
                                            onclick="confirmation(event)">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
                {{ $product->links() }}

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    function confirmation(ev) {
                        ev.preventDefault();
                        Swal.fire({
                            title: "Are you sure to delete this",
                            text: "This delete will be permanent",
                            icon: "warning",
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: false,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                let form = document.getElementById("formDelete");
                                form.submit();
                                Swal.fire("Product Deleted");
                            } else if (result.isDenied) {
                                Swal.fire("Changes are not saved");
                            }

                        })
                    }
                </script>

</body>

</html>
