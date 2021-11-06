<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Details</title>
</head>
<body>

    <header>
        <nav>
        <div class="navLeft">
        <img class="logo" src="\img\Frame.svg" alt="logo serv'drone">
</div>
        <div class="navCenter">
            <ul class="ulNav">

                <li class="liNav"><a href="/">ACCUEIL</a></li>
                <li class="liNav"><a href="/histoire">HISTOIRE</a></li>
                <li class="liNav"><a href="/contacts">CONTACT</a></li>
                <li class="liNav"><a href="/evenements">EVENEMENTS</a></li>

            </ul>
</div>
        <div class="panier">
        <a href="/panier"><img src="\img\shopping-cart-solid.svg" alt="panier"> </a>
        </div>
            <div class="navRight">
               <a href="/profil"><img src="\img\account_icon_138984.svg" alt="profil"> </a>
            </div>
        </nav>
    </header>

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


    <footer>
        <div class="contientFooter">
       <div class="footerLeft">
           <div class="titreReseaux">
               <h2 class="reseauxSociaux">Réseaux Sociaux</h2>
           </div>
           <div class="listeReseau">
                    <div class="reseau">
                        <div class="imgReseau">
                        <img src="/img/twitter.png" alt="">
                        </div>
                        <p class="nomReseau">@Serv'drone</p>
                    </div>
                    <div class="reseau">
                        <div class="imgReseau">
                            <img src="/img/instagram.png" alt="">
                        </div>
                        <p class="nomReseau">Serv'drone_Off</p>
                </div>
                <div class="reseau">
                    <div class="imgReseau">
                        <img src="/img/facebook.png" alt="">
                    </div>
                    <p class="nomReseau">Serv'drone</p>
                </div>
            </div>
            </div>

            <div class="footerMid">
                <div class="titreNews">
                    <h2 class="newsletter">Newsletter</h2>
                </div>
                <form class="formNews" action="" method="POST">
                <input class="adressMail" type="mail" placeholder="Entrez votre adresse mail">
                <button class="btnNews">S'abonner</button>
                </form>
                <div class="cguCgv">
                    <p class="espaceCgu"><a href="/cgu">CGU</a></p>
                    <p class="espaceCgu">|</p>
                    <p class="espaceCgu"><a href="/cgv">CGV</a></p>
                    <p class="espaceCgu">|</p>
                    <p class="espaceCgu"><a href="/politique">Politique de confidentialité</a></p>
                </div>
            </div>

           <div class="footerRight">
            <div class="titreReseaux">
                <h2 class="partenaires">partenaires</h2>
            </div>
            <div class="listePartenaires">
                     <div class="divPartenaire">
                         <p class="nomPartenaire">easy drone</p>
                     </div>
                     <div class="divPartenaire">
                         <p class="nomPartenaire">ct drone</p>
                 </div>
                 <div class="divPartenaire">
                     <p class="nomPartenaire">drone moi la main</p>
                 </div>
             </div>
             </div>
           </div>
           <p class="copyrights">SERV’DRONE - © 2021</p>


    </footer>

    </body>
    </html>
