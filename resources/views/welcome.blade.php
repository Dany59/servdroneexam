<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>servdrone</title>
</head>

<body class="couleurPanier">
    @guest



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
        <a href="/panier"><img src="\img\shopping-cart-solid.svg" alt="panier" class="imgPanier"> </a>
        </div>
            <div class="navRight1">
               <a href="/inscription"><img src="\img\account_icon_138984.svg" alt="profil" class="imgProfil"> </a>
            </div>
        </nav>
    </header>


    <!----------------------------------------------- menu responsive ---------------------------->




    @endguest

    @if (Auth::user('login'))
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
        <a href="/panier"><img src="\img\shopping-cart-solid.svg" alt="panier"></a>
        </div>
            <div class="navRight">
               <a href="/profil/{{ Auth::user()->id }}"><p class="prenomDynamique"> Bienvenue <span>{{ Auth::user()->prenom }}</span></p> </a>

            </div>
        </nav>
    </header>


    @endif



   @yield('content')



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
            <form class="formNews" action="/" method="POST">
                {{ csrf_field() }}
            <input class="adressMail" type="mail" placeholder="Entrez votre adresse mail" name="email">
            <input type="submit" class="btnNews" value="s'abonner" name="submit">
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
