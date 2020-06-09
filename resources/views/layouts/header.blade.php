<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="blog-header-logo text-dark" href="{{ route('publications.index') }}">MiniBlog</a>
        </div>
    
        <div class="col-5 d-flex justify-content-end align-items-center">
            @if (Route::has('login'))
                <div class="top-right links">
                    
                    @auth
                        @if (Auth::user()->rol == "admin")
                            <a href="{{ route('admins.index') }}">Home</a>
                        @else
                            <a href="{{ route('home') }}">Home</a>
                        @endif

                        <a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 
        </div>
        
    </div>
</header>