@extends('index')

@section('title', 'Home |' .config('app.name'))
    

@section('content')

        <img src="{{asset('images/canada.png')}}" alt="drapeau canada" class="rounded 
        shadow-md h-38 mt-8">
       <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello form Canada</h1>
       <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}.</p>
       
  
@endsection