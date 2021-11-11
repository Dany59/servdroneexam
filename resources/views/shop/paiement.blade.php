@extends('welcome')
@section('content')

    <main>
        <form action="{{url('/paiement')}}"method="POST" class="contientPaiement">
        {{csrf_field()}}

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
                    <input class="inputVille" type="text" name="ville"required>

                </div>
                <div class="appartementPaiement">
                    <label for="" class="appartementLabel">N°Appartement</label>
                    <input class="inputAppartement" type="text" name="appartement">

                </div>
                <div class="lieuPaiement">
                    <label for="" class="lieuLabel">lieu-dit</label>
                    <input class="inputLieu" type="text" name="lieu_dit">

                </div>
            </div>

            <div class="divInfosCB">
                <div class="codeCB">
                    <label for="" class="numeroCBLabel">N° carte bleu*</label>
                    <input class="inputnumeroCB" type="text" name="numero_cb"required>
            </div>
            <div class="nomCB">
                <label for="" class="nomCBLabel">Nom carte bleue*</label>
                <input class="inputNomCB" type="text" name="nom_cb"required>
        </div>
        <div class="cryptoCB">
            <label for="" class="cryptoLabel">cryptogramme*</label>
            <input class="inputCrypto" type="text" name="cryptogramme"required>
    </div>
    <div class="dateCB">
        <label for="" class="dateLabel">date d'expiration*</label>
        <input class="inputDate" type="text" name="date_expiration"required>
</div>
            </div>

            <p class="champsobligatoire">*champs obligatoire</p>

            <div class="contientCGUPaiement">
                <div class="cguCgvPaiement">
                    <div class="checkboxPaiement">
                    <input type="checkbox" class="checkPolitiquePaiement" name="politique" value="1">
                    <label class="labelPolitiquePaiement" for="">j'accepte la <a class="lienPolitique" href="/politique">politique de confidentialité*</a></label>
                    </div>
                    <div class="checkboxPaiementCGU">
                        <input type="checkbox" class="checkPolitiquePaiement" name="cgu_cgv" value="1">
                        <label class="labelPolitiquePaiement" for="">j'accepte les<a href="/cgu" class="lienPolitique"> CGU/CGV*</a></label>
                        </div>
                </div>
                        <div class="paiementSecuBtn">
                            <p class="paraSecu">Paiement sécurisé</p>
                        <input  type="submit" class="btnPaiement" value="Payer" name="submit1">
                        </div>
            </div>
        </form>


    </main>




    @endsection
