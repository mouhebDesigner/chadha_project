<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Trajet;
use App\Models\Participant;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        if(Auth::user()->isConducteur())
            $trajets = Auth::user()->trajets()->get();
        else 
            $trajets = Trajet::all();
        return view('admin.reservations.index', compact('trajets'));
    }

    public function accepter(Participant $reservation){
        $reservation->update([
            'status' => "accepter"
        ]);
        $fullName = User::find($reservation->user_id)->nom." ".User::find($reservation->user_id)->prenom;
        return response()->json([
            "deleted" => 'La réservation de '.$fullName.' à été accepté'
        ]);
    }
    public function refuser(Participant $reservation){
        $reservation->update([
            'status' => "refuser"
        ]);
        $fullName = User::find($reservation->user_id)->nom." ".User::find($reservation->user_id)->prenom;
        return response()->json([
            "deleted" => 'La réservation de '.$fullName.' à été refusé'
        ]);
    }
}
