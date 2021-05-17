@extends('index')

@section('title','Home|'.{{env('APP_NAME')}})
    

@section('content')

        
       <h1>Hello form Morocco</h1>
       <p>It's currently {{ date('h:i A') }}.</p>
       
  
@endsection