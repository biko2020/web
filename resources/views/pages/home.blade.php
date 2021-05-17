@extends('index')

@section('title', 'Home |'.config('app.name'))
    

@section('content')

        
       <h1>Hello form Morocco</h1>
       <p>It's currently {{ date('h:i A') }}.</p>
       
  
@endsection