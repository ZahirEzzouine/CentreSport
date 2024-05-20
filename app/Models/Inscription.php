<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable=["message", "date_inscription","utilisateur_id", "sport_id"];

    public function get_utilisateur(){
        return $this->belongsTo(Utilisateur::class,'id');
    }
    public function get_sport(){
        return $this->belongsTo(Sport::class,'id');
    }
}
