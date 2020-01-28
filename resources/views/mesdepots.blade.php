@extends('layouts.app')

@section('navbar')
@include('include.navbar')
@endsection

@section('content')
<p class="text-center bg-gray-800 text-white text-3xl font-semibold rounded-full">

        Voici vos places en location {{ Auth::user()->name }}
</p>


@endsection
