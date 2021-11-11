@extends('welcome')
@section('content')

    <main class="backgroundContact1">

        <h1 class="inscription">Inscription</h1>

        @if ($errors->any())
        @foreach ($errors->all as $error )
        {{ $error}}

        @endforeach

        @endif

        <div class="formulaireInscription">
            <form action="{{url('/inscription')}}" method="POST">
                {{csrf_field()}}


                <div class="emailInscription">
                <label for="" class="labelMailInscription">Email</label>
                <input type="mail" name="mail" class="inputMailInscription" >
                </div>
                <div class="mdpInscription">
                <label for="" class="labelMdpInscription">Mot de passe</label>
                <input type="text" class="inputMdpInscription" required name="mdp">
                </div>
                <div class="mdpConfirmInscription">
                <label for="" class="labelMdpConfirmInscription">Confirmer mot de passe</label>
                <input type="text" class="inputMdpConfirmInscription" required name="mdpconfirm">
                </div>
                <div class="politiqueConfiInscription">
                    <input type="checkbox" name="politique_accept" id="" class="checkInscri"   value="1">
                    <label for="" class="LabelPolitiqueInscription">J'accepte la politique de confiendtialité</label>
                </div>
                <div class="politiqueConfiInscription">
                    <input type="checkbox" name="cgu_accept" id="" class="checkInscri"  value="1"  >
                    <label for="" class="LabelPolitiqueInscription">J'accepte les CGU et les CGV</label>
                </div>
                    <div class="buttonInscription">
                        <input type="submit" value="S'inscrire" class="boutonInscription">
                    </div>
                    <p class="paraconnexion">déjà inscris ? <a href="/connexion" class="connectez_vous"> connectez vous</a></p>
            </form>

        </div>
    </main>
       @endsection
