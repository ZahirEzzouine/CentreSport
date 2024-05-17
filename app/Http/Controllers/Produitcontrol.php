<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Photo_p;
class Produitcontrol extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Produit=Produit::all();
        return view('Produit.index',compact('Produit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Produit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "code"=>"required|max:5|bail",
            "nom"=>"required|max:5|bail",
            "old_p"=>"required|max:5|bail",
            "prix"=>"required|max:5|bail",
            "image"=>"required",
        ]);

     $Produit = Produit::create($request->all());

     $image=$request->file('image');
     $imageName = time() . "." . $image->extension();
     $image->move(public_path("images"),$imageName);
     Photo_p::create([
        'image' => 'images/' . $imageName,
        'produit_id' => $Produit->id
    ]);


         return back()->with('msg','created valid');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {

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
