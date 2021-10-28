<!DOCTYPE html>
<html lang="en">
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

        <div class="contientPaiement">
            <div class="nomPrenomAdresse">
                <div class="divPaiementNom">
                <label for="name" class="paiementNom">Nom</label>
                <input type="text" class="inputNomPay" name="nom_client">
                </div>

                <div class="divPaiementPrenom">
                    <label for="name" class="paiementPrenom">Prenom</label>
                    <input type="text" class="inputPrenomPay" name="prenom_client">
                </div>
                <div class="divPaiementAdresse">
                    <label for="name" class="paiementAdresse">Adresse</label>
                    <input type="text" class="inputAdressePay" name="adresse_client">
                </div>
            </div>

            <div class="complementAdresse">
                <div class="codePostalPaiement">
                    <label for="" class="codepostalLabel">code postal</label>
                    <input class="inputCodePostal" type="text" name="code_postal">

                </div>
                <div class="villePaiement">
                    <label for="" class="villeLabel">Ville</label>
                    <input class="inputVille" type="text" name="code_postal">

                </div>
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