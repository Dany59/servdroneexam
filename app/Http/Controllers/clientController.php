<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class clientController extends Controller
{



        /*************************************************inscription client, règle de validation ****************************************/
    function createClients(Request $request){
        $clients = new Clients();
        $request->validate([
            'mail' => 'required|unique:clients',
            'mdp'=> 'required|min:8|max:16|regex:^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@]).*$^',
            'mdpconfirm'=> 'required|min:8|max:16|same:mdp',
            'politique_accept'=> 'required',
            'cgu_accept' => 'required|',
        ]);

                    /***************rquete base de données, inscription des données en bdd ******************************************************************/
        $clients->mail = $request->mail;
        $clients->mdp =Hash::make($request->get('mdp'));
        $clients->mdpconfirm=Hash::make($request->get('mdpconfirm'));
        $clients->politique_accept = $request->politique_accept;
        $clients->cgu_accept = $request->cgu_accept;
        $clients->admin = $request->admin;
        $clients->save();


        return redirect('/connexion');


        }

        public function authenticate(Request $request)
        {
            $client = $request->validate([
                'email' => ['required', 'email'],
                'mdp' => ['required'],
            ]);

            if (Auth::attempt($client)) {
                $request->session()->regenerate();

                return redirect()->intended('/profil');
            }


    }

}
