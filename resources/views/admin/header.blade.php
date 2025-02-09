<header class="">
    <nav class="">

        <div class="flex ">
          <a href="/admin/dashboard" class="">
            <div class="text-3xl font-extrabold p-8 flex">


                <strong>Admin god</strong>

                <form class="mx-8" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="text-2xl text-white" type="submit" ><h1>LOGOUT</h1></button>
                </form>

            </div>

        </div>


    </nav>
</header>
