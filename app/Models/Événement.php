<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Événement extends Model
{
    use HasFactory;
    protected $fillable=["titre","description","envoyer","sport_id"];

    public function get_sport(){
        return $this->belongsTo(Sport::class,'sport_id');
    }

}
