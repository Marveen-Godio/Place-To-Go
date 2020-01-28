<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function depot()
    {
        return view('deposer');
    }
    public function profil()
    {
        return view('profil');
    }
}
