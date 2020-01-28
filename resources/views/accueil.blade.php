@extends('layouts.app')

@section('navbar')
@include('include.navbar')
@endsection

@section('content')

@if (Auth:: check() == 1)
<p class="flex justify-center font-semibold text-2xl">Bonjour {{ Auth::user()->name }}</p>
@endif

<p class="flex justify-center font-semibold text-2xl">Trouvez votre place !</p>
<div class="flex justify-center mt-6">

    <div class="w-full max-w-sm flex justify-center">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
            <div class="mb-4">
                <label class="block text-pink-900 text-s mb-2" for="lieu-de-depart">Lieu de départ : </label>
                <input class="shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lieu-de-depart" type="text">
            </div>

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="dates-et-heures">Dates et Heures : </label>
                <label class="text-sm text-red-400" for="depart-le">Départ le : </label>
                <input class="shadow appearance-none border border-green-300 rounded py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date">
                <label class="text-sm text-red-400" for="depart-le">à : </label>
                <input class="shadow appearance-none border border-green-300 rounded py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="heure" type="time">
                <br>
                <label class="text-sm text-red-400" for="depart-le">Retour le : </label>
                <input class="shadow appearance-none border border-green-300 rounded py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date">
                <label class="text-sm text-red-400" for="depart-le">à : </label>
                <input class="shadow appearance-none border border-green-300 rounded py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="heure" type="time">
            </div>

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="lieu-de-depart">Distance max : </label>
                <input class="shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="distance-max" type="number">
            </div>

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="lieu-de-depart">Type de véhicule : </label>
                <select class="bg-white shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option>Citadine</option>
                    <option>Berline</option>
                    <option>Familiale/Break</option>
                    <option>SUV</option>
                    <option>Camionette</option>
                    <option>Deux roues</option>
                </select>
            </div>

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="lieu-de-depart">Nombre de passagers : </label>
                <input class="shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="distance-max" type="number">
            </div>

            <div class="flex items-center justify-center">
                <a href="/resultats"><button class="bg-gray-800 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline" type="button">Rechercher</button></a>
            </div>
        </form>
    </div>
</div>
@endsection
