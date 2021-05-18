@extends('index')


@section('title','About-Us |' .config('app.name'))


@section('content')

     <!--Pourquoi Utiliser asset pour nos fichier Statique-->

     <!--l'utilisation de la fonction asset c'est just pour stock les images
     dans le serveur le plus proche du client base sur le principe de CDN Content Delivery Network-->

    <img src="{{asset('images/canada.png')}}" alt="drapeau Canada">
    <p>Built with &hearts; by Ait oufkir Brahim</p>

    <p><a href="{{route('page_home')}}"> page d'accueil</a></p>


@endsection
