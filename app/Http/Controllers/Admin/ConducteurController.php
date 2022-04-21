<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConducteurController extends Controller
{
    public function index(){
        $conducteurs = User::where('role', 'conducteur')->get();
        return view('admin.conducteurs.index', compact('conducteurs'));
    }
}
