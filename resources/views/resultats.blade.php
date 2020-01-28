@extends('layouts.app')

@section('navbar')
@include('include.navbar')
@endsection

@section('content')
<h1 class="text-xl text-red-400 text-center">Résultats de votre recherches</h1>
@foreach($posts as $post)
<div class="flex justify-center mt-6">
    <div class="flex justify-center">
        <img src="/img/{{ $post->pictures }}" width="150px" alt="">
    </div>
    
    <div  class="text-center">
        <p class="text-lg block text-pink-900">{{ $post->type_of_parking_space }}</p>
        <p>{{ $post->price}} € / jour</p>
        <a href="/fiche/{{$post->id }}"><button class="ml-3 bg-gray-800 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">En savoir plus</button></a>
    </div>
</div>

@endforeach

@endsection