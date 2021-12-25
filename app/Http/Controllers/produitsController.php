<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;

class produitsController extends Controller
{
    public function produits(){
        $produits=Produits::get();
        return view('shop.produits')->with('produits',$produits);

    }

    public function produitById($id){



             $produit = Produits::find($id);

             return view('shop.details')->with('produit', $produit);


       }
}
