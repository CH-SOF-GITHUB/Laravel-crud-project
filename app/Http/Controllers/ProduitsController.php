<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    //
    public function produits()
    {
        return view("fronts.produits");
    }
}
