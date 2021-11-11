@extends('welcome')
@section('content')


    <main class="backgroundContact">

        <h1 class="pageContact">Contact</h1>
        <h2 class="ecrivezNous">ecrivez-nous</h2>

    <form class="formulaireContact" action="{{url('/contacts')}}" method="post">
        {{csrf_field()}}

        <div class="nomPrenom">
            <div class="nomFormContact">
                <label class="labelNom" for="name" class="nomContact">Nom</label>
                <input class="inputNom" name="nom" type="text">
            </div>
            <div class="nomFormContact">
                <label class="labelNom" for="name" class="nomContact">Prénom</label>
                <input class="inputNom" name="prenom" type="text">
            </div>
        </div>
        <div class="divMail">
            <label class="labelMail" for="mail">Email</label>
            <input class="inputMail" type="mail" name="mail">
        </div>

        <div class="divMess">
            <label for="" class="labelMess">Message</label>
            <textarea class="inputmess" name="message" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="checkboxEnvoi">
            <div class="checkboxBlock">
            <div class="checkboxPolitique">
            <input class="agrandiCheckbox" type="checkbox" name="politique" value="1">
            <label class="jacceptePo" for="">j'accepte la <a class="souligne" href="/politique">politique de confidentialité</a></label>
        </div>
            <div class="checkboxCgv">
            <input class="agrandiCheckbox" type="checkbox" name="cgv" value="1">
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




    @endsection
