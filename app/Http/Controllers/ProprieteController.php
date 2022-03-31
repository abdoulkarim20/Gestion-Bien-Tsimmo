<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    public function lister(){
        return view('propriete.liste');
    }
    public function ajouter(){
        return view('propriete.ajout');
    }
}
