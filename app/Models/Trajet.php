<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;
    protected $fillable = [
        "source",
        "destination",
        "date",
        "heure",
        "prix",
        "user_id",
        "nbr_passager_max"
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function reservations(){
        return $this->belongsToMany(User::class, 'participants', 'trajet_id', 'user_id')->withPivot('id', 'nbrPassager', 'status');
    }
}
