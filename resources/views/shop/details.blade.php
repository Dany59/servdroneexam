@extends('welcome')
@section('content')



    <main class="contientDetail">

        <div class="imageBlock">
            <img src="{{$produit->photo1}}" alt="">
            <img src="{{$produit->photo2}}" alt="">
            <img src="{{$produit->photo3}}" alt="">
        </div>

        <div class="grandeImgDetail">
            <img src="{{$produit->photo4}}" alt="" class="imgTestDetail">
        </div>

        <div class="divTextDetails">
            <h1 class="titreDetails">{{$produit->titre_produit}}</h1>
            <p class="paraDetails"> {{$produit->description2}} </p>
            <p class="descriptionDetail">Description description description</p>
            <p class="paraDetails">{{$produit->description2}}</p>

            <div class="divcontientQuantite">
            <form class="quantitéDetails" method="POST" action="/panier">
                {{csrf_field()}}
                <label for="">quantité</label>
                <input type="number" name="quantite" id="" value="1">

                <div class="disponibilite">
                <p class="dispoDetails">disponibilité</p>
                <p class="enStock">en stock</p>
                </div>
                <div class="contientAjoutPanier">
                    <div class="divAjoutpanier">
                        <input type="hidden" name="id" id="id" value="{{$produit->id}}">
                <input type="submit" value="ajouter au panier" class="ajoutPanier">
                    </div>
                    <div class="prixProduit">
                        <p class="prix">{{$produit->prix}}€</p>
                    </div>
                </div>

            </form>
                </div>
            </div>




    </main>


    @endsection
