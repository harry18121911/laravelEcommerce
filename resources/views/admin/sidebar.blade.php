<div class="text-xl w-1/4">
<nav id="">

    <span class="heading">Main</span>
    <ul class="">
        <li class="active"><a href="{{url ("/admin/dashboard") }}"> <i class="icon-home"></i>Home </a></li>


        <li><a href="{{url("view_category")}}"> <i class="icon-grid"></i>Category </a></li>

        <li>
            <a href="{{url("view_product")}}" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows">
                </i>Products
            </a>
            <ul id="" class="">
                <li><a href="{{url("add_product")}}">Add Product</a></li>
                <li><a href="{{url("view_product")}}">View Product</a></li>
            </ul>
        </li>

        <li>
            <a href="{{url("view_order")}}">
                <i class="icon-grid">

                </i>Orders

            </a>

        </li>
    </ul>
</nav>
</div>









