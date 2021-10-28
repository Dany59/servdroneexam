<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>CONTACT</title>
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
        <img src="\img\shopping-cart-solid.svg" alt="panier"> 
        </div>
            <div class="navRight">
                <img src="\img\account_icon_138984.svg" alt="profil"> 
            </div>
        </nav>
    </header>
    
    
    <main class="backgroundContact">

        <h1 class="pageContact">Contact</h1>
        <h2 class="ecrivezNous">ecrivez-nous</h2>
                
    <form class="formulaireContact" action="" method="post">
        <div class="nomPrenom">
            <div class="nomFormContact">
                <label class="labelNom" for="name" class="nomContact">Nom</label>
                <input class="inputNom" name="nom" type="text">
            </div>
            <div class="nomFormContact">
                <label class="labelNom" for="name" class="nomContact">Prénom</label>
                <input class="inputNom" name="nom" type="text">
            </div>
        </div>
        <div class="divMail">
            <label class="labelMail" for="mail">Email</label>
            <input class="inputMail" type="mail" name="email">
        </div>

        <div class="divMess">
            <label for="" class="labelMess">Message</label>
            <textarea class="inputmess" name="message" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="checkboxEnvoi">
            <div class="checkboxBlock">
            <div class="checkboxPolitique">
            <input class="agrandiCheckbox" type="checkbox" name="politique de confidentialité">
            <label class="jacceptePo" for="">j'accepte la <a class="souligne" href="/politique">politique de confidentialité</a></label>
        </div>
            <div class="checkboxCgv">
            <input class="agrandiCheckbox" type="checkbox" name="cgv">
            <label for="" class="jacceptePo">j'accepte les <a href="/cgv" class="souligne">CGU/CGV</a></label>
            </div>
        </div>
        <div class="boutonEnvoiMessage">
            <button name="submit" class="envoiMessage">ENVOYER</button>
        </div>
        </div>
        
    </form>

    <div class="divManuel">
        <div class="divTitreAssistance">
    <h2 class="titreAssistance">Assistance</h2>
        </div>
        <ul class="divTelecharger">
            <li class="telecharger">Télécharger le manuel d'utilisation</li>
            <ul class="deroulant">
                <li class=""><a href="/img/PatignyCV.pdf" download="PatignyCV">serv'drone class 1</a></li>
                <li class=""><a href="/img/PatignyCV.pdf" download="PatignyCV">serv'drone class 2</a></li>
                <li class=""><a href="/img/PatignyCV.pdf" download="PatignyCV">serv'drone class 3</a></li>
        </ul>
       


        </ul>
    </div>
    </main>



    
    <footer class="test">
        <div class="contientFooter test">
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