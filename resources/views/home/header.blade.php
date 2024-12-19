<header class="header_section">
    <nav>
        <a class="underline text-red-600 hover:text-blue-800 visited:text-purple-600" href="/">
                Giftos
        </a>


        <div class="">
            <ul class="">
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
            <div class="user_option">

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
