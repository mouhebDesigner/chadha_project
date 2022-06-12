<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Participant;
use Illuminate\Http\Request;

class ReservationClientController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    public function create($trajet_id){
        return view('trajets.reserver', compact('trajet_id'));
    }

    public function store(Request $request){
        Participant::create($request->all());

        return redirect('trajets')->with('reserved', 'Vous avez reservé un trajet vers '.Trajet::find($request->trajet_id)->destination);
    }
}
