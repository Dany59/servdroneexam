@extends('welcome')

@section('content')

<main class="backgroundContact1">

    <h1 class="inscription">Modifier Profil</h1>


<div class="formulaireInscription">
<form action="{{url('update')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$clients['id']}}">

    <div class="emailInscription">
        <label for="" class="labelMailInscription">Email</label>
        <input type="mail" name="email" class="inputMailInscription" value="{{$clients->email}}" >
        </div>

        <div class="mdpInscription">
            <label for="" class="labelMdpInscription">Nom</label>
            <input type="nom" class="inputMdpInscription"  name="nom" value="{{$clients->nom}}">
            </div>

            <div class="mdpInscription">
                <label for="" class="labelMdpInscription">Prénom</label>
                <input type="prénom" class="inputMdpInscription"  name="prenom" value="{{$clients->prenom}}">
                </div>
                <div class="buttonInscription">
                    <input type="submit" value="Modifier" class="boutonInscription">
                </div>



</form>
</div>

@endsection
