<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Clients;
use Illuminate\Support\Facades\Auth;
Use Session;
use Illuminate\Support\Facades\DB;

class panierController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function createPanier (Request $request){


        Panier::create([

            'quantite'=>$request->quantite,
            'produits_id'=>$request->id,
            'client_id'=>Auth::id(),

        ]);
        session()->flash('success',"Product add succesful!");
        return redirect()->route('panier');
    }

   /* public function afficheMonPanier(){
    $paniers=DB::table('paniers')
    ->leftjoin('produits', 'produits.titre_produit', '=', 'produits_id', 'produits.titre_produit', 'produits.prix', '=', 'produits.produits')
    ->select('id_produits', 'quantite','paniers.id','=' ,'id','produits.*')

    ->where('paniers.client_id','=',Auth::id());
    $panier = $paniers->get();

    return view('shop.panier')->with('paniers',$panier);
}*/
/*public function afficheMonPanier($client_id){

  /*  $produits = Panier::leftJoin("produits",  function ($join) {
        $join->on("paniers.produits_id", "=", "produits.id");

})->get();

        return view('shop.panier')->with( 'produits', $produits );*/
       /* $clients = Panier::leftJoin('clients', 'paniers.client_id', '=', 'clients.id')
         ->leftJoin('produits', 'paniers.produits_id', '=', 'produits.id')
          ->get(['paniers.client_id', 'produits.titre_produit']);*/

          public function afficheMonPanier(){



          }
    /*{
       /* $paniers=Panier::with('user', 'produits')->get();
        return view('shop.panier', compact('paniers'));
    }*/

}

