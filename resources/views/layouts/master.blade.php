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
        <div id="app" class="container">
            
            @include('layouts.header')

            @include('layouts.list_category')
            
            @yield('blog_body')
            
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('js_script')
        
    </body>
</html>