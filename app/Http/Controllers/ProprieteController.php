<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    public function list(){
        return view('propriete.liste');
    }
    public function ajout(){
        return view('propriete.ajout');
    }
}
