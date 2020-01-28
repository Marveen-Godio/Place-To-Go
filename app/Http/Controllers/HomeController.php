<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class HomeController extends Controller
{
    /*
     * Create a new controller instance.
     *
     * @return void
     */


    /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function accueil()
    {
        return view('accueil');
    }

    public function resultats()
    {
        return view('resultats', ['posts' => Post::all()]);
    }

    public function fiche($id)
    {
        $post = Post::find($id)->get()[$id-1];
        return view('fiche', ["post" => $post]);
    }
    public function cu()
    {
        return view('cu');
    }
    public function ml()
    {
        return view('ml');
    }
    public function faq()
    {
        return view('faq');
    }
    public function favoris()
    {
        return view('favoris');
    }
    public function coordonnees()
    {
        return view('coordonnees');
    }
    public function ccm()
    {
        return view('ccm');
    }
    public function mesdepots()
    {
        return view('mesdepots');
    }
}
