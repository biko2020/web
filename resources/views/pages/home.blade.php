@extends('index')

@section('title', 'Home |' .config('app.name'))
    

@section('content')

        <img src="/images/canada.png" alt="drapeau canada">
       <h1>Hello form Morocco</h1>
       <p>It's currently {{ date('h:i A') }}.</p>
       
  
@endsection