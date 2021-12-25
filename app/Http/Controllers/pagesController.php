<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class pagesController extends Controller
{

    public function produits(){
        return view('shop.produits');
    }
    public function histoire(){
        return view('shop.histoire');
}
    public function contacts(){
        return view('shop.contacts');
}
public function evenements(){
    return view('shop.evenements');
}
public function panier(){
    return view('shop.panier');
}
public function profil(){
    return view('shop.profil');
}

public function cgu(){
    return view('shop.cgu');
}

public function cgv(){
    return view('shop.cgv');
}

public function politique(){
    return view('shop.politique');
}

public function paiement(){
    return view('shop.paiement');
}

public function details(){
    return view('shop.details');
}


public function inscription(){
    return view('shop.inscription');
}


public function connexion(){
    return view('shop.connexion');
}
}
