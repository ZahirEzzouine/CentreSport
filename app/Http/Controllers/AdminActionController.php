<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminActionController extends Controller
{
    /**
     * afficher get_ajouter view.
     */


    public function get_all_événement()
    {
        $événements=Événement::all();
        return view("AdminActions.get_all_événement",compact("événements"));
    }



    public function get_ajouter_événement()
    {
        $sports=Sport::all();
        return view("AdminActions.get_ajouter_événement",compact("sports"));
    }

    /**
     * stocker événement.
     */
    public function ajouter_événement()
    {
        Événement::create([
            "titre" => $request->titre,
            "description" => $request->description,
            "envoyer" => $request->envoyer,
            "sport_id" => $request->sport_id,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function get_modifier_événement($id)
    {
        $événement=Utilisateur::select("select * from utilisateurs where email =".$request->email);
        return view("AdminActions.get_modifier_événement",compact("événement"));
    }


    /**
     * Display the specified resource.
     */
    public function modifier_événement(ModifierÉvénementRequest $request,$id)
    {
        DB::update("update utilisateurs set description=".$request->new_événement."where id=".$id);
        return redirect("/");
    }


    public function supprimer_événement($id)
    {
        DB::delete("delete from événement where id=".$id);
        return redirect("/");
    }


    public function get_ajouter_sport()
    {
        return view("AdminActions.get_ajouter_sport");
    }

    /**
     * stocker événement.
     */
    public function ajouter_sport(Request $request)
    {
        $request->validate([
            "image"=>"required|image",
            "nom"=>"required|string"
        ]);
        $imageName=$request->nom.".".$request->image->extension();
        //$imagePath=$request->file('image')->store(config('images.path'),'public');
        $request->logo->move(public_path("images_sports"),$imageName);
        Sport::create([
            "nom" => $request->nom,
            "image" =>"images_sports/".$imageName
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function get_modifier_sport(/*$id*/)
    {
        //$sport=Sport::find($id);
    return view("AdminActions.get_modifier_sport"/*,compact("sport")*/);
    }

    /**
     * Display the specified resource.
     */
    public function modifier_sport(ModifierÉvénementRequest $request,$id)
    {
        $request->validate([
            "nom"=>"required|string"
        ]);
        if($request->file("image")){
            $imageName=$request->nom.".".$request->image->extension();
            //$imagePath=$request->file('image')->store(config('images.path'),'public');
            $request->logo->move(public_path("images_sports"),$imageName);
            DB::update("update sports set nom=".$request->nom."where id=".$id);
        }
        else{
            DB::update("update sports set nom=".$request->nom."where id=".$id);
        }
        return redirect("/");
    }

    public function supprimer_sport($id)
    {
        DB::delete("delete from sport where id=".$id);
        return redirect("/");
    }}
