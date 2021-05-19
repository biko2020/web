<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="flex flex-col justify-between min-h-screen items-center py-6">

    <!--le contenu  principale *** role pour la raison d'accessibilité-->
      <main role="main" class="flex flex-col justify-center itmes-center">
        @yield('content')
      </main>

       

       <footer class="text-gray-400">
            <p>&copy; Copyright {{date('Y')}} 
           
            @if(!Route::is('page_about'))  <!--condition -->
              &middot; <a href="{{route('page_about')}}" class="text-indigo-500
              hover:text-indigo-600 underline">About-us</a></p>
            @endif  

       </footer>
       
    </body>
</html>
