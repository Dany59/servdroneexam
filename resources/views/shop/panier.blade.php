@extends('welcome')
@section('content')
    <main class="testpanier">

        <div class="contientPanier">
            <div class="ContientPanierLeft">
                <h1 class="nomArticlePanier">Nom Article</h1>

                <div class="imgDescriptionPanier">
                    <div class="imgPanier">
                        <img src="/img/photo-panier.png" alt="" class="photoPanier">
                    </div>
                    <div class="descriptionPanier">
                        <h2 class="titrePanier">titre</h2>
                        <p class="descriptionProduitPanier">Voici la description du produit Class1, vous trouverez toutes les informations ICI !</p>
                        <div class="prixPoubelle">
                            <p class="prixPanier">399€</p>
                            <img src="/img/poubelle.svg" alt="" class="poubellePanier">
                        </div>
                    </div>

                    </div>

                </div>

                <div class="contientPanierRight">
                    <div class="centrePanier">
                        <h2 class="recapitulatif">récapitulatif de commande</h2>
                        <div class="flexProduitPrix">
                        <p class="produitRightPanier">PRODUITS</p>
                        <p class="prixRightPanier">PRIX</p>
                        </div>
                        <div class="ligneHorizontale"></div>
                        <div class="flexProduitPrix1">
                            <p class="produitRightPanier">PRODUITS</p>
                            <p class="prixRightPanier">PRIX</p>
                            </div>
                            <div class="flexProduitPrix2">
                                <p class="produitRightPanier">PRODUITS</p>
                                <p class="prixRightPanier">PRIX</p>
                                </div>
                                <div class="ligneHorizontale"></div>
                                <div class="flexProduitTotalePrix">
                                    <p class="produitRightPanier">PRODUITS</p>
                                    <p class="prixRightPanier">PRIX</p>
                                    </div>

                                    <div class="buttonValidationPanier">
                                        <form action="" method="post">
                                            <input type="submit" value="confirmer" class="buttonConfimerPanier">
                                        </form>
                                    </div>


                    </div>

                </div>
</div>





    </main>

   @endsection
