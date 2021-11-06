<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function histoire(){
        return view('pages.histoire');
}
    public function contacts(){
        return view('pages.contacts');
}
public function evenements(){
    return view('pages.evenements');
}
public function panier(){
    return view('pages.panier');
}
public function profil(){
    return view('pages.profil');
}

public function cgu(){
    return view('pages.cgu');
}

public function cgv(){
    return view('pages.cgv');
}

public function politique(){
    return view('pages.politique');
}

public function paiement(){
    return view('pages.paiement');
}

public function details(){
    return view('pages.details');
}
}
