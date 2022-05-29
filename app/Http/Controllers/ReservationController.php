<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Trajet;
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
}
