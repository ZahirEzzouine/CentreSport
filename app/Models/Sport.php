<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;
    protected $fillable=["nom","image"];
    public function get_inscription(){
        return $this->hasMany(Inscription::class,'sport_id','id');
    }

    public function get_événemnt(){
        return $this->hasMany(Événement::class,'sport_id','id');
    }
}
