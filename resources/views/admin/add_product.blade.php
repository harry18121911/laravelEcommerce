<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-900 text-gray-300">
    @include('admin.header')

    <div>
        @include('admin.sidebar')
        <div>
            <div>
                <div>
                </div>

                <h1 class="text-3xl text-center">Add Product</h1>

                <div class="flex justify-center items-center m-8">
                    <form action="{{url("upload_product")}}" method="post" enctype="multipart/form-data">
                       @csrf
                        <div class="p-4 flex justify-between">
                            <label class="text-2xl mt-7" for="title">Product Title</label>
                            <input class="w-96 h-20" type="text" name="title" required>
                        </div>
                        <div class="p-4 flex justify-between">
                            <label class=" text-2xl mt-7 mr-8" for="description">Description</label>
                            <textarea class="w-[450px] h-20" type="text" name="description" required></textarea>
                        </div>
                        <div class="p-4 flex justify-between">
                            <label class="text-2xl mt-7" for="price">Price</label>
                            <input class="w-96 h-20" type="text" name="price">
                        </div>
                        <div class="p-4 flex justify-between">
                            <label class="text-2xl mt-7" for="quantity">Quantity</label>
                            <input class="w-96 h-20" type="numbre" name="quantity">
                        </div>
                        <div class="p-4 flex justify-between">
                            <label class="text-2xl mt-6" for="category">Category</label>
                            <select name="category" required>
                                <option value="">Select a Option</option>

                                @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="p-4">
                            <label class="text-2xl" for="image">Image Title</label>
                            <input type="file" name="image">
                        </div>

                        <div class="p-4">
                            <input class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-2xl" type="submit" value="Add Product">
                        </div>
                    </form>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
