<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    public function index(){
        $reservations = Auth::user()->reservations()->get();
        return view('profile', compact('reservations'));
    }

    public function update(Request $request){
        Auth::user()->update($request->except('password'));
    }
}
