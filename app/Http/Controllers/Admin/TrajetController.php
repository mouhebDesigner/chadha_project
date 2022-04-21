<?php

namespace App\Http\Controllers\Admin;

use App\Models\Trajet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrajetController extends Controller
{
    public function index(){
        $trajets = Trajet::paginate();
        return view('admin.trajets.index', compact('trajets'));
    }
}
