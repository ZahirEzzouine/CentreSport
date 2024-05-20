<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable=["id", "nom", "email","password","num_phone", "age","code_de_recuperation","type_utilisateur"];

    public function get_inscription(){
        return $this->hasMany(Inscription::class,'utilisateur_id','id');
    }

    public function get_sport()
    {
        return $this->hasManyThrough(Sport::class, Inscription::class);
    }
}
