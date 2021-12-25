<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\paiementController;
use App\Http\Controllers\produitsController;
use App\Http\Controllers\panierController;










/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



        // route page d'accueil et Inscription Newsletter //
Route::get('/', [produitsController::class, 'produits'])->name('products');
Route::post('/', [clientController::class, 'newsletter']);



        // Route accès aux pages //
Route::get ('/histoire',[pagesController::class, 'histoire']);
Route::get ('/contacts',[pagesController::class, 'contacts']);
Route::get ('/evenements',[pagesController::class, 'evenements']);
Route::get ('/panier',[pagesController::class, 'panier'])->middleware('auth')->name('panier');
Route::get ('/profil',[pagesController::class, 'profil']);
Route::get ('/cgu',[pagesController::class, 'cgu']);
Route::get ('/cgv',[pagesController::class, 'cgv']);
Route::get ('/politique',[pagesController::class, 'politique']);
Route::get ('/paiement',[pagesController::class, 'paiement']);
Route::get ('/inscription',[pagesController::class, 'inscription']);
Route::get ('/connexion',[pagesController::class, 'connexion'])->name('login');

    // Route Formulaire //
Route::post ('/inscription',[clientController::class, 'createClients']);
Route::post ('/contacts',[contactController::class, 'createContact']);
Route::post ('/paiement',[paiementController::class, 'createPaiement']);
Route::post ('/connexion',[clientController::class, 'authenticate']);



            //route Gestion Client //
Route::get ('/profil/{id}',[clientController::class, 'clientByid'])->middleware('auth');
Route::get('deleteClient/{id}', [clientController::class,'deleteClients']);
Route::get('updateClients/{id}', [clientController::class,'updateClients']);
Route::post('update', [clientController::class, 'update']);
Route::get('/deconnexion', [clientController::class,'deconnexion']);

    // route affichage détails produit par id + panier//
Route::get('/details/{id}', [produitsController::class, 'produitById']);
Route::post('/panier/add', [panierController::class, 'createPanier']);







