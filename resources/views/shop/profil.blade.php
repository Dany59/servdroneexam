@extends('welcome')

@section('content')



<main class="backgroundContact1">

    <h1 class="inscription">profil</h1>
    <div class="contientProfil">
        <div class="contientMail">
            <p class="titreMail">Mail:</p>
            <p class="mailClient">{{$clients->email}}</p>
        </div>
        <div class="contientMail">
            <p class="titreMail">Mot de passe</p>
            <p class="mailClient">*********</p>
        </div>
        <div class="contientNom">
            <p class="titreNom">Nom:</p>
            <p class="nomClient">{{$clients->nom}}</p>

        </div>
        <div class="contientPrenom">
            <p class="titrePrenom">Prenom:</p>
            <p class="prenomClient">{{$clients->prenom}}</p>

        </div>
        <div class="contientMail">
        <a href="/updateClients/{{$clients->id}}" class="buttonModifier">Modifier</a>
        <a href="/deleteClient/{{$clients->id}}" class="buttonSupprimer">Supprimer compte</a>
        </div>
        <div class="contientDeconnexion">
        <a href="/deconnexion" class="Deconnexion">deconnexion</a>
        </div>
    </div>

@endsection

