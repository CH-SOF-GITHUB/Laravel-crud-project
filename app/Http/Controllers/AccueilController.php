<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function accueil()
    {
        return view("fronts.accueil");
    }
    /* public function accueil($nom, $prenom)
    {
        //return view("fronts.accueil" => $nom)
        //return view("fronts.accueil", compact("nom", "prenom"));
        return view("fronts.accueil", ["nom" => $nom, "prenom" => $prenom]);
    } */
}
