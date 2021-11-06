<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Paiement</title>
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


    <main>
        <form action="" class="contientPaiement">
            <div class="nomPrenomAdresse">
                <div class="divPaiementNom">
                <label for="name" class="paiementNom">Nom *</label>
                <input type="text" class="inputNomPay" name="nom_client" required>
                </div>

                <div class="divPaiementPrenom">
                    <label for="name" class="paiementPrenom">Prenom*</label>
                    <input type="text" class="inputPrenomPay" name="prenom_client" required>
                </div>
                <div class="divPaiementAdresse">
                    <label for="name" class="paiementAdresse">Adresse*</label>
                    <input type="text" class="inputAdressePay" name="adresse_client" required>
                </div>
            </div>

            <div class="complementAdresse">
                <div class="codePostalPaiement">
                    <label for="" class="codepostalLabel">code postal*</label>
                    <input class="inputCodePostal" type="text" name="code_postal"required>

                </div>
                <div class="villePaiement">
                    <label for="" class="villeLabel">Ville*</label>
                    <input class="inputVille" type="text" name="code_postal"required>

                </div>
                <div class="appartementPaiement">
                    <label for="" class="appartementLabel">N°Appartement</label>
                    <input class="inputAppartement" type="text" name="code_postal">

                </div>
                <div class="lieuPaiement">
                    <label for="" class="lieuLabel">lieu-dit</label>
                    <input class="inputLieu" type="text" name="code_postal">

                </div>
            </div>

            <div class="divInfosCB">
                <div class="codeCB">
                    <label for="" class="numeroCBLabel">N° carte bleu*</label>
                    <input class="inputnumeroCB" type="text" name="code_postal"required>
            </div>
            <div class="nomCB">
                <label for="" class="nomCBLabel">Nom carte bleue*</label>
                <input class="inputNomCB" type="text" name="code_postal"required>
        </div>
        <div class="cryptoCB">
            <label for="" class="cryptoLabel">cryptogramme*</label>
            <input class="inputCrypto" type="text" name="code_postal"required>
    </div>
    <div class="dateCB">
        <label for="" class="dateLabel">date d'expiration*</label>
        <input class="inputDate" type="text" name="code_postal"required>
</div>
            </div>

            <p class="champsobligatoire">*champs obligatoire</p>

            <div class="contientCGUPaiement">
                <div class="cguCgvPaiement">
                    <div class="checkboxPaiement">
                    <input type="checkbox" class="checkPolitiquePaiement">
                    <label class="labelPolitiquePaiement" for="">j'accepte la <a class="lienPolitique" href="/politique">politique de confidentialité*</a></label>
                    </div>
                    <div class="checkboxPaiementCGU">
                        <input type="checkbox" class="checkPolitiquePaiement">
                        <label class="labelPolitiquePaiement" for="">j'accepte les<a href="/cgu" class="lienPolitique"> CGU/CGV*</a></label>
                        </div>
                </div>
                        <div class="paiementSecuBtn">
                            <p class="paraSecu">Paiement sécurisé</p>
                        <button class="btnPaiement">Payer</button>
                        </div>
            </div>
        </form>


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
