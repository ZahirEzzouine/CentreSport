<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo_p extends Model
{
    use HasFactory;
    protected $fillable=['image','produit_id'];

}
