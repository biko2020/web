<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

    </head>
    <body>

    @yield('content')

       

       <footer>
            <p>&copy; Copyright {{date('Y')}} 
           
            @if(!Route::is('page_about'))  <!--condition -->
              &middot; <a href="{{route('page_about')}}">About-us</a></p>
            @endif  

       </footer>
       
    </body>
</html>
