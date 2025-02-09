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

                <div class="flex justify-center items-center m-8">
                    <h1 class="text-2xl mr-8">Add Category</h1>
                    <form action="{{ url('add_category') }}" method="post">
                        @csrf
                        <div>
                            <input class="w-96 h-24" type="text" name="category">
                            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-2xl"
                                type="submit" value="Add Category">
                        </div>
                    </form>

                </div>

                <div>
                    <table class="text-center m-auto border-2 border-yellow-300 mt-12 w-[600px]">
                        <tr>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Category Name</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Edit</th>
                            <th class="bg-sky-300 p-4 text-xl font-bold text-white">Delete</th>
                        </tr>

                        @foreach ($category as $category)
                            <tr>
                                <td class="text-white p-3 border-solid border">{{ $category->category_name }}</td>
                                <form id="formUpdate" action="{{ url('edit_category', $category->id) }}" method="GET">
                                    @csrf
                                    <td class="text-white p-3 border-solid border"><button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-2xl">Edit</button>
                                    </td>
                                </form>
                                <form id="formDelete" action="{{ url('delete_category', $category->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td class="text-white p-3 border-solid border"><button type="submit"
                                            href="{{ url('delete_category', $category->id) }}"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-2xl"
                                            onclick="confirmation(event)">Delete</button></td>
                                </form>

                            </tr>
                        @endforeach

                    </table>
                </div>
                <!-- JavaScript files-->
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
                                Swal.fire("Category Deleted");
                            } else if (result.isDenied) {

                                Swal.fire("Changes are not saved");
                            }

                        })
                    }
                </script>

</body>

</html>
