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
        return view("AdminActions.get_ajouter_événement");
    }


    
    public function get_ajouter_événement()
    {
        return view("AdminActions.get_ajouter_événement");
    }

    /**
     * stocker événement.
     */
    public function ajouter_événement()
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
        return redirect("home");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
