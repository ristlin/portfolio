<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yuse L. | @yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        

    </head>
    <body>
        @section('header')
        <div class="container mx-auto">
            @include('layout.header')
            
            <hr>
        
            <div class="flex content-center">
                <div class="flex-1 lg:px-48 sm:px-2">
                    @yield('content')
                </div>
            </div>
        </div>   
    </body>
</html>