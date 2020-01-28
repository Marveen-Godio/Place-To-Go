<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//traiter le post envoyé
use App\Post;//créer une objet qui va dans la BDD
use Illuminate\Support\Facades\Auth;//Permet de savoir qui est authentifié

class DepotController extends Controller
{
    public function add(Request $request)
    {
        //dd(Auth::user()->id);//debugandDie affiche la var demandée et arrète le programme avant sa fin

       $post = Post::create([

        'type_of_parking_space' => $request->type_of_parking_space,
        //'type_of_vehicle' => $request->type_of_vehicle,
        'description' => $request->description,
        'adress' => $request->adress,
        'postal_number' => $request->postal_number,
        'city' => $request->city,
        //'availability' => $request->availability,
        //'publicatio_date' => $request->publicatio_date,
        'pictures' => $request->picture,
        'price' => $request->price

//ecrire tous les champs
        ]);
        $user= Auth::user();
        $post->user()->associate($user);//Associer l'utilisateur connecté au post envoyé.
        $post->save();//sauvegarder dans la base de donnée
        return redirect('/');
    }
}
