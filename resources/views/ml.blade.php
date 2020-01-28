@extends('layouts.app')

@section('navbar')
@include('include.navbar')
@endsection

@section('content')
<div class="flex justify-center ">
    <p class="flex items-center bg-gray-800 text-white text-xl font-semibold rounded-full px-4 py-2 w-56">
        <img src="/img/travaux.png" alt="travaux">
        En Travaux
    </p>
    <div></div>
</div>
<div class="flex justify-center">
    <iframe src="https://giphy.com/embed/nqfnhFtbxBulG" width="350" height="350" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nqfnhFtbxBulG"></a></p>
</div>

@endsection
