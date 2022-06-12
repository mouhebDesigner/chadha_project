<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Auth;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "password",
        "role",
        "numtel",
        "city",
        "codePostal",
        "car_photo"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        return Auth::user()->role == "admin";
    }
    public function isConducteur(){
        return Auth::user()->role == "conducteur";
    }

    public function trajets(){
        return $this->hasMany(Trajet::class);
    }

    public function reservations(){
        return $this->belongsToMany(Trajet::class, 'participants', 'user_id', 'trajet_id');
    }
    
    public function reservationCount(){
        $count = 0;
        foreach($this->trajets()->get() as $trajet){
            $count += $trajet->reservations()->count();
        }
        return $count;
    }

}
