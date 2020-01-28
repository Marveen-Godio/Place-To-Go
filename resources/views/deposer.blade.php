@extends('layouts.app')

@section('navbar')
@include('include.navbar')
@endsection

@section('content')

<div class="flex justify-center">
    <div class="w-full max-w-md">
        <h1 class="text-red-400 text-xl text-center mt-3 ">Déposer une annonce</h1>
        <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" id="form" action="/depot/add" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-pink-900 text-s mb-2" for="type_of_parking_space">Type de place</label>
                <select name="type_of_parking_space" class="bg-white shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option>Garage</option>
                    <option>Parking souterrain</option>
                    <option>Parking exterieur</option>
                    <option>Cour</option>
                    <option>Emplacement couvert</option>
                    <option>Jardin</option>
                </select>
            </div>

            {{-- <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="type_of_vehicle">Type(s) de véhicule accepté(s)</label>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="type_of_vehicle">
                    <span class="text-sm text-gray-700">Citadine</span>
                </label>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="type_of_vehicle">
                    <span class="text-sm text-gray-700">Berline</span>
                </label>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="type_of_vehicle">
                    <span class="text-sm text-gray-700">Familiale/Break</span>
                </label>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="type_of_vehicle">
                    <span class="text-sm text-gray-700">SUV</span>
                </label>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="type_of_vehicle">
                    <span class="text-sm text-gray-700">Camionnette</span>
                </label>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="type_of_vehicle">
                    <span class="text-sm text-gray-700">Deux roues</span>
                </label>
            </div> --}}

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="descritpion">Description</label>
                <textarea class="shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" cols="30" rows="5" required></textarea>
            </div>

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="adress">Adresse</label>
                <input class="bg-white shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="adress" required>
            </div>

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="postal_number">Code postal</label>
                <input class="bg-white shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="postal_number" required>
            </div>

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="city">Ville</label>
                <input class="bg-white shadow appearance-none border border-green-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="city" required>
            </div>

            {{-- <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="">Disponibilités : </label>
                <label class="text-sm text-red-400" for="depart-le">Du : </label>
                <input class="shadow appearance-none border border-green-300 rounded py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date" required>
                <label class="text-sm text-red-400" for="depart-le">au : </label>
                <input class="shadow appearance-none border border-green-300 rounded py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date" required>
            </div> --}}

            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="picture">photo</label>
                <input class="bg-white shadow appearance-none border border-green-300 rounded py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="file" name="picture" >
            </div>
            <div class="mb-6">
                <label class="block text-pink-900 text-s mb-2" for="price">Tarifs</label>
                <input class="bg-white shadow appearance-none border border-green-300 rounded py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="number" name="price" required>
                <span class="text-sm text-gray-700"> € / jour</span>
                </label>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-red-400 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline" type="submit" form="form">C'est parti</button>
            </div>
        </form>
    </div>
</div>

@endsection
