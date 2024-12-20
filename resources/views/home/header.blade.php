<header class="header_section">


        <p class="text-8xl text-blue-600 text-center">Giftos</p>

    <nav class="">


        <div class="bg-sky-300 text-xl flex justify-center space-x-9 rounded-t-3xl items-center">
            <ul class="flex space-x-10 items-center">
                <li class="">
                    <a class="text-red-500" href="shop.html">
                        <p class="">Home</p>
                    </a>
                </li>

               <li class="nav-item">
                    <a class="nav-link" href="shop.html">
                        Shop
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="why.html">
                        Why Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimonial.html">
                        Testimonial
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            <div class="text-xl flex space-x-9 items-center">

                @if(Route::has("login"))

                    @auth
                 <a href="{{url("myorders")}}">
                    My Orders
                </a>
                    <a href="{{url("mycart")}}">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    [{{$count}}]
                </a>
                <form style="padding: 8px;" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input class="btn btn-success" type="submit" value="logout">
                </form>

                @else
                <div class="text-2xl items-center">
                <a href="{{url("/login")}}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                        Login
                    </span>
                </a>

                <a href="{{url("/register")}}">
                    <i class="fa fa-vcard" aria-hidden="true"></i>
                    <span>
                        Register
                    </span>
                </a>

                </div>
               @endauth

                @endif



                <form class="form-inline ">
                    <button class="btn nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>
