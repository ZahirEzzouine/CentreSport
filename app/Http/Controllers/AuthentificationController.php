<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\InscriptionRequest;
use App\Http\Requests\Mot_de_pass_oublier_Request;
use App\Http\Requests\NouvelleMotDePasseRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AuthentificationController extends Controller
{
    /**
     * get loin view.
     */
    public function get_login()
    {
        return view("authentification.login");
    }

    /**
     * get inscription view.
     */
    public function get_inscription()
    {
        return view("authentification.inscription");
    }

    /**
     * vérifier le login.
     */
    public function check_login(LoginRequest $request)
    {
        Auth::attempt(["email"=>request->email,"password"=>$request->password]);
    }

    //vérifier l'inscription
    public function store_inscription(InscriptionRequest $request)
    {
        Utilisateur::create([
            "nom" => $request->nom,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "num_phone" => $request->num_phone,
            "age" => $request->age,
            "type_utilisateur" => "normal"
        ]);
    }

    /**
     * get mot de passe oublier view
     */
    public function get_mot_de_passe_oublier()
    {
        return view("authentification.mot_de_passe_oublier");
    }


    /**
     * vérifier le code de recupération.
     */
    public function check_code_verification(Mot_de_pass_oublier_Request $request)
    {

            $utilisateur=Utilisateur::select("select * from utilisateurs where email =".$request->email);
            if($request->code==$utilisateur[0]->code_de_recuperation){
                $id=$utilisateur[0]->id;
                Auth::attempt(["email"=>$request->email,"password"=>$utilisateur->password]);
                return view("authentification.nouvelle_mot_de_passe",compact("id"));
            }else{
                return back()->withErrors("error_code","code incorrect");
            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function new_password(NouvelleMotDePasseRequest $request,$id)
    {
        DB::update("update utilisateurs set password=".$request->new_password."where id=".$id);
        return redirect("home");
    }
}
