@extends('welcome')
@section('content')

    <main class="contientDetail">

        <div class="imageBlock">
            <img src="/img/photodetail1.jpg" alt="">
            <img src="/img/photodetail2.jpg" alt="">
            <img src="/img/photodetail3.jpg" alt="">
        </div>

        <div class="grandeImgDetail">
            <img src="/img/photodetail4.jpg" alt="" class="imgTestDetail">
        </div>

        <div class="divTextDetails">
            <h1 class="titreDetails">serv'drone plus</h1>
            <p class="paraDetails">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux </p>
            <p class="descriptionDetail">Description description description</p>
            <p class="paraDetails">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux </p>

            <div class="divcontientQuantite">
            <form class="quantitéDetails">
                <label for="">quantité</label>
                <input type="number" name="quantite" id="">

                <div class="disponibilite">
                <p class="dispoDetails">disponibilité</p>
                <p class="enStock">en stock</p>
                </div>
                <div class="contientAjoutPanier">
                    <div class="divAjoutpanier">
                <input type="submit" value="ajouter au panier" class="ajoutPanier">
                    </div>
                    <div class="prixProduit">
                        <p class="prix">399€</p>
                    </div>
                </div>
            </form>
                </div>
            </div>



    </main>


    @endsection
