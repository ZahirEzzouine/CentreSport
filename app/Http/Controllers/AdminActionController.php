<?php

namespace App\Http\Controllers;
use App\Models\Événement;
use App\Models\Utilisateur;
use App\Models\Sport;
use App\Models\Service;
use App\Models\Inscription;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminActionController extends Controller
{
    /**
     * afficher get_ajouter view.
     */
    public function __construct() {
        $this->middleware("authCentre");
    }

    public function get_interface_admin(){
        Gate::authorize('admin_actions');
        return view("AdminActions.get_interface_admin");
    }


    public function get_all_événements()
    {
        Gate::authorize('admin_actions');
        $événements=Événement::all();
        return view("AdminActions.get_all_événements",compact("événements"));
    }



    public function get_ajouter_événement()
    {
        Gate::authorize('admin_actions');
        $sports=Sport::all();
        return view("AdminActions.get_ajouter_événement",compact("sports"));
    }

    /**
     * stocker événement.
     */
    public function ajouter_événement(Request $request)
    {
        Gate::authorize('admin_actions');
        Événement::create([
            "titre" => $request->titre,
            "description" => $request->description,
            "envoyer" => $request->envoyer,
            "sport_id" => $request->sport_id,
        ]);
        return redirect("/get_all_événements");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function get_modifier_événement($id)
    {
        Gate::authorize('admin_actions');
        $événement=Événement::select("select * from événements where id =".$id);
        return view("AdminActions.get_modifier_événement",compact("événement"));
    }


    /**
     * Display the specified resource.
     */
    public function modifier_événement(ModifierÉvénementRequest $request,$id)
    {
        Gate::authorize('admin_actions');
        DB::update("update utilisateurs set description=".$request->new_événement."where id=".$id);
        
        return redirect("/get_all_événements");
    }


    public function supprimer_événement($id)
    {
        Gate::authorize('admin_actions');
        DB::delete("delete from événements where id=".$id);
        return redirect("/get_all_événements");
    }


    public function get_all_sports()
    {
        Gate::authorize('admin_actions');
        $sports=Sport::all();
        return view("AdminActions.get_all_sports",compact("sports"));
    }

    public function get_ajouter_sport()
    {
        Gate::authorize('admin_actions');
        return view("AdminActions.get_ajouter_sport");
    }

    /**
     * stocker événement.
     */
    public function ajouter_sport(Request $request)
    {
        Gate::authorize('admin_actions');
        $imageName=$request->nom.".".$request->image->extension();
        //$imagePath=$request->file('image')->store(config('images.path'),'public');
        $request->image->move(public_path("images_sports"),$imageName);
        Sport::create([
            "nom" => $request->nom,
            "image" =>"images_sports/".$imageName
        ]);
        return redirect("/get_all_sports");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function get_modifier_sport($id)
    {
        Gate::authorize('admin_actions');
        $sport=Sport::find($id);
        return view("AdminActions.get_modifier_sport",compact("sport"));
    }

    /**
     * Display the specified resource.
     */
    public function modifier_sport(Request $request,$id)
    {
        Gate::authorize('admin_actions');
        if($request->file("image")){
            $imageName=$request->nom.".".$request->image->extension();
            //$imagePath=$request->file('image')->store(config('images.path'),'public');
            $request->image->move(public_path("images_sports"),$imageName);
            DB::update("UPDATE sports SET nom = ?, image = ? WHERE id = ?", [$request->nom, "images_sports/".$imageName,$id]);
        }
        else{
            DB::update("UPDATE sports SET nom = ? WHERE id = ?", [$request->nom, $id]);
        }
        return redirect("/get_all_sports");
    }

    public function supprimer_sport($id)
    {
        Gate::authorize('admin_actions');
        DB::delete("DELETE from sports where id=?",[$id]);
        return redirect("/get_all_sports");
    }




    //utilisateur
    public function get_all_utilisateurs()
    {
        Gate::authorize('admin_actions');
        $utilisateurs=Utilisateur::all();
        return view("AdminActions.get_all_utilisateurs",compact("utilisateurs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function get_modifier_utilisateur($id)
    {
        $utilisateurs=Utilisateur::find($id);
    return view("AdminActions.get_modifier_utilisateur",compact("utilisateurs"));
    }

    /**
     * Display the specified resource.
     */
    public function modifier_utilisateur(ModifierÉvénementRequest $request,$id)
    {
        $request->validate([
            "nom"=>"required|string"
        ]);
        if($request->file("image")){
            $imageName=$request->nom.".".$request->image->extension();
            //$imagePath=$request->file('image')->store(config('images.path'),'public');
            $request->logo->move(public_path("images_sports"),$imageName);
            DB::update("update utilisateurs set nom=".$request->nom."where id=".$id);
        }
        else{
            DB::update("update utilisateurs set nom=".$request->nom."where id=".$id);
        }
        return redirect("/");
    }

    public function supprimer_utilisateur($id)
    {
        DB::delete("delete from utilisateurs where id=".$id);
        return redirect("/");
    }

}
