<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <style>
            * { font-family: 'Shadows Into Light', cursive; }
        </style>
    </head>
    <body>
        <div class="container">
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @include('layout.header')
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            

            @include('layout.list_category')
            
            @yield('blog_body')
            
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('js_script')

    </body>
</html>