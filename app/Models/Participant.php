<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "destination",
        "nbrPassager",
        "user_id",
        "trajet_id"
    ];
    
    
    
}
