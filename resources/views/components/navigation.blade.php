<nav class='bg-dark text-light'>
    <div class='container'>
        <div class='d-flex align-items-center justify-content-between'>
            <h3>Inventory <span class='text-primary'>System</span></h3>
            @auth
            <div class="d-flex align-items-center justify-content-center my-3 list-none">
                <div class='me-4 fw-bold'>
                     {{auth()->user()->email}} 
                </div>
                <div class=''><a href="{{route('product.index')}}" class='btn btn-primary btn-sm px-4 me-4 '>Dashboard</a></div>
                <div>
                    <form method="post" action="{{route('user.logout')}}">
                        @csrf
                    <input class='btn btn-primary btn-sm px-4' type="submit" value="Logout" />
                    </form>
                    </div>
                </div>
            @endauth
            @guest
            <div class="d-flex align-items-center justify-content-center my-3">
                <div class=''><a class='btn btn-primary btn-sm px-4 me-4 '>Login</a></div>
                <div class=''><a class='btn btn-primary btn-sm px-4 me-2'>Register</a></div>
            </div>
            @endguest
        </div>
    </div>
</nav>