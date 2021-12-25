@extends('welcome')
@section('content')

    <main class="backgroundContact2">

        <h1 class="inscription">connexion</h1>

        <div class="formulaireInscription">
            <form action="{{url('/connexion')}}" method="POST">
                {{csrf_field()}}
                <div class="emailInscription">
                <label for="" class="labelMailInscription">Email</label>
                <input type="mail" name="email" class="inputMailInscription" required>
                </div>
                <div class="mdpInscription">
                <label for="" class="labelMdpInscription">Mot de passe</label>
                <input type="password" class="inputMdpInscription" name="password" required>
                </div>
                <div class="buttonInscription">
                    <input type="submit" value="Connexion" class="boutonInscription">
                </div>

        </form>
    </div>
    </main>
@endsection

