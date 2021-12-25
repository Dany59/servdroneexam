<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $fillable=['client_id','quantite','produits_id'];


    public function produits(){

        return $this->belongsTo(Produits::class);

    }

    public function user(){

        return $this->belongsTo(Clients::class);

    }
}
