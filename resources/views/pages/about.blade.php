@extends('index')


@section('title','About-Us |' .config('app.name'))


@section('content')

    <img src="/images/canada.png" alt="drapeau Canada">
    <p>Built with &hearts; by Ait oufkir Brahim</p>

    <p><a href="{{route('page_home')}}"> page d'accueil</a></p>


@endsection
