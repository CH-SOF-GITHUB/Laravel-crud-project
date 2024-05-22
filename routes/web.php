<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('fronts.welcome');
}); */

Route::get('/', [AccueilController::class, 'accueil'])->name("home.accueil");
//->where(["n" => "[a-z A-Z]{3,20}", "p" => "[a-zA-Z ']{3,20}"]);

Route::get('/produits', [ProduitsController::class, 'produits'])->name("home.produits");

Route::get('/about', [AboutController::class, 'about'])->name("home.about");

Route::get('/contact', [ContactController::class, 'contact'])->name("home.contact");
/*
Exercice1 : Développer le controller avec la méthode nécessaire pour récupérer les deux
paramètres date et num de la route suivante et les afficher dans une vue.
Route
get (('/{date}/{ OrderController ::class ,,' name order.show
*/
//Route::get("data/{date}/num/{number}", [OrderController::class, "show"])->name('order.show');
Route::get("/{date}/{num}/{id}", [OrderController::class, "show"])->name('order.show');
//->where(["date" => "[YYYY-MM-DD]", "num" => "[0,9]{8}"]);

Route::post("/contact/save", [ShowController::class, 'save'])->name('show.save');


Route::get('accueil', function () {
    return '<h2>Bienvenue sur le site !</h2>';
})->name('test');


// ajouter une route ressource
Route::resource('categories', CategoriesController::class);
