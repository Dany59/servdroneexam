<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/histoire',[pagesController::class, 'histoire']);
Route::get ('/contacts',[pagesController::class, 'contacts']);
Route::get ('/evenements',[pagesController::class, 'evenements']);
Route::get ('/panier',[pagesController::class, 'panier']);
Route::get ('/profil',[pagesController::class, 'profil']);
Route::get ('/cgu',[pagesController::class, 'cgu']);
Route::get ('/cgv',[pagesController::class, 'cgv']);
Route::get ('/politique',[pagesController::class, 'politique']);
Route::get ('/paiement',[pagesController::class, 'paiement']);



