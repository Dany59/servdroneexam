<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{

    function createContact(Request $request){
        $contact = new Contact();

        $contact->nom = $request->nom;
        $contact->prenom =$request->prenom;
        $contact->mail = $request->mail;
        $contact->message = $request->message;
        $contact->politique = $request->politique;
        $contact->cgv = $request->cgv;


        $contact->save();


    }

};
