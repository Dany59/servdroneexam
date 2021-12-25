@extends('welcome')
@section('content')



<main>
<div class="imgAccueil">
    <img class="imgTopAccueil" src="/img/Home.jpg" alt="">
</div>
@foreach ($produits as $produit )

<div class="droneUn" style="background-image: url({{$produit->background_image}})">
    <div class="contientTitreDrone">
    <h2 class="titreDrone">{{$produit->titre_produit}}</h2>
</div>
<p class="descriptionDroneUn">{{$produit->description_produit}}</p>



<div class="contientImage">

<div class="pictos">

    <div class="divPictoUn">
        <img class="pictoUn" src="{{$produit->picto1}}" alt="">
        <img class="pictoUn" src="{{$produit->picto2}}" alt="">
    </div>

    <div class="divPictoDeux">
        <img class="pictoDeux" src="{{$produit->picto3}}" alt="">
        <img class="pictoDeux" src="{{$produit->picto4}}" alt="">
        <img class="pictoDeux" src="{{$produit->picto5}}" alt="">
</div>

<div class="divButton">
<a href="/details/{{$produit->id}}" class="buttonDetail">En savoir plus</a>
</div>


</div>
<a href="/details/{{$produit->id}}" class="buttonDetail1">En savoir plus</a>
</div>



</div>


@endforeach
</main>
@endsection
