@extends('layouts.app')
@section('content')
<div class="">

    <div class=" flex justify-center container mx-auto px-4 ">
            <a href="/accueil">
                <img class="h-48 w-48 rounded-full" src="/img/Logo1.png" alt="PlaceToGo">
            </a>
    </div>

    <a class="flex justify-center bg-gray-800 text-white text-3xl font-semibold  mt-12 px-4 py-2 w-60">
        {{ Auth::user()->name }}
    </a>

    <div class="flex items-center flex-col mt-12">

        <a href="/favoris" class="flex items-center justify-between bg-gray-800 shadow text-white text-lg font-semibold border px-4 py-2 mt-4 w-64  rounded-full">
            <img src="/img/etoile.png" alt="etoile">
            Favoris
            <div></div>
        </a>

        <a href="/coordonnees" class="flex justify-between bg-gray-800 shadow text-white text-lg font-semibold border px-4 py-2 mt-12 w-64 rounded-full">
                <img src="/img/stylo.png" alt="stylo">
            Mes Coordonnées
            <div></div>
        </a>
        <a href="/mesdepots" class="flex justify-between bg-gray-800 shadow text-white text-lg font-semibold border px-4 py-2 mt-12 w-64 rounded-full">
            <img src="/img/liste2.png" alt="liste">
        Mes Annonces
        <div></div>
        </a>
        <a href="/depot" class="flex justify-between bg-gray-800 shadow text-white text-lg font-semibold border px-4 py-2 mt-12 w-64 rounded-full">
                <img src="/img/plus.png" alt="plus">
            Louer ma Place
            <div></div>
        </a>
    </div>
    <div>

    </div>

@endsection
