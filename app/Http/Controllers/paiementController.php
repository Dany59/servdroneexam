<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;
use Illuminate\Support\Facades\Hash;

class paiementController extends Controller
{
    function createPaiement(Request $request){
        $paiement = new Paiement();

        $paiement->nom_client = $request->nom_client;
        $paiement->prenom_client =$request->prenom_client;
        $paiement->adresse_client=$request->adresse_client;
        $paiement->code_postal = $request->code_postal;
        $paiement->ville = $request->ville;
        $paiement->appartement = $request->appartement;
        $paiement->lieu_dit = $request->lieu_dit;
        $paiement->numero_cb =Hash::make($request->get('numero_cb'));
        $paiement->nom_cb = $request->nom_cb;
        $paiement->cryptogramme = $request->cryptogramme;
        $paiement->date_expiration = $request->date_expiration;
        $paiement->politique = $request->politique;
        $paiement->cgu_cgv = $request->cgu_cgv;


        $paiement->save();
}
}
