<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    //
    public function save(Request $request)
    {
        // requests des variables de formulaire
        //$nom = $request->nom;
        //$prenom = $request->prenom;
        //$email = $request->email;
        //$adresse = $request->adresse;
        //dd($request);
        //$name = $request->validate(['name' => 'required|string|max:255']);
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        return view("orders.show", compact("name", "email", "subject", "message"));
        // ["name" => $name, "email" => $email, "subject" => $subject, "message"->$message]
        //return view("orders.show", compact("nom", "prenom", "email", "adresse"));
    }
}
