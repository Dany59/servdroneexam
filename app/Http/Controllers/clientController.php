<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use App\Models\Newsletter;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\Rules\Unique;

class clientController extends Controller
{
         /*************************************************inscription client, règle de validation ****************************************/
         function createClients(Request $request){
            $clients = new Clients();
            $request->validate([
                'email' => 'required|unique:clients',
                'password'=> 'required|min:8|regex:^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@]).*$^',
                'passwordconfirm'=> 'required|min:8|same:password',
                'politique_accept'=> 'required',
                'cgu_accept' => 'required|',
            ]);

                        /***************rquete base de données, inscription des données en bdd ******************************************************************/
            $clients->email = $request->email;
            $clients->password =Hash::make($request->get('password'));
            $clients->passwordconfirm=Hash::make($request->get('passwordconfirm'));
            $clients->politique_accept = $request->politique_accept;
            $clients->cgu_accept = $request->cgu_accept;
            $clients->admin = $request->admin;
            $clients->save();

            return redirect('/connexion');


            }

            public function authenticate(Request $req)
            {
                $clients = $req->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);

                if (Auth::attempt($clients))  {
                    $id = Auth::id();
                   /*  $id= Crypt::encrypt($id);*/



                    $req->session()->regenerate();
                    return redirect('/profil/' .$id);

                }


               return back()->withInput();


            }


          public function clientById($id){

           /* $id = Crypt::decrypt($id);*/

                $clients = Clients::find($id);

                return view('shop.profil')->with('clients', $clients);


          }

          public function deleteClients($id){
            $clients = Clients::find($id);
            $clients->delete();
            return redirect('/inscription');
}

public function updateClients($id){




    $clients = Clients::find($id);


    return view('shop.updateClients', ['clients'=>$clients]);


}

public function update(Request $request){

    $clients= Clients::find($request->id);


    $clients->email=$request->email;
    $clients->nom=$request->nom;
    $clients->prenom=$request->prenom;
    $clients->save();

    return redirect('/profil/'.$clients->id);
     }


     public function deconnexion()
{
    auth::logout();

    return redirect('/');
}

function newsletter(Request $request){
    $newsletter = new Newsletter();

    $request->validate([
        'email' => 'required|unique:newsletters',
    ]);

    $newsletter->email = $request->email;

    $newsletter->save();

    return redirect('/');
}
}
