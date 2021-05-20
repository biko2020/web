<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ func_Title($title ?? null) }}</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="flex flex-col justify-between min-h-screen items-center py-6">

    <!--le contenu  principale *** role pour la raison d'accessibilité-->

      <main role="main" class="flex flex-col justify-center itmes-center">
        @yield('content')
      </main>

       <!--include footer-->
       @include('layouts.partials._footer')

    </body>
</html>
