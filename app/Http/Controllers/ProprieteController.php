<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence;
use App\Models\Deduction;
use App\Models\Proprietaire;
use App\Models\Quartier;
use App\Models\Type;
use App\Models\Propriete;

class ProprieteController extends Controller
{
    public function ajouter(){
        $types = Type::all();
        $agences= Agence::all();
        $proprietaires = Proprietaire::all();
        $quartiers=Quartier::all();
        $deductions=Deduction::all();
        return view('propriete.ajout',compact('types','agences','proprietaires','quartiers','deductions'));
    }

    public function enregistrer(Request $request){
        $propriete=new Propriete();
        $propriete->libelle=$request->libelle;
        $propriete->superficie=$request->superficie;
        $propriete->nombrePiece=$request->nombrePiece;
        $propriete->quartier_id=$request->quartier_id;
        $propriete->deduction_id=$request->deduction_id;
        $propriete->agence_id=$request->agence_id;
        $propriete->type_id=$request->type_id;
        $propriete->proprietaire_id=$request->proprietaire_id;
        $propriete->save();
        if($propriete){
            return "Bien ajouter"; 
        }
    }
}
