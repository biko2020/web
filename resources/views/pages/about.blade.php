@extends('index')


@section('title','About-Us |' .config('app.name'))


@section('content')

     <!--Pourquoi Utiliser asset pour nos fichier Statique-->

     <!--l'utilisation de la fonction asset c'est just pour stock les images
     dans le serveur le plus proche du client base sur le principe de CDN Content Delivery Network-->

    <img src="{{asset('images/canada.png')}}" alt="drapeau Canada" class="my-12 rounded-full 
    shadow-md h-38">
    <p class="text-gray-700 mb-5 mt-8">
    Built with <span class="text-pink-500">&hearts;</span> 
    by Ait oufkir Brahim</p>

    <p>
    <a href="{{route('page_home')}}" class="text-indigo-500 hover:text-indigo-600 underline"> 
     page d'accueil</a>
    </p>


@endsection
