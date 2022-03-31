<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietaireController extends Controller
{
    public function ajout()
    {
        return view('proprietaire.ajout');
    }
}
