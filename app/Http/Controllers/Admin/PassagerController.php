<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassagerController extends Controller
{
    public function index(){
        $passagers = User::where('role', 'passager')->get();
        return view('admin.passagers.index', compact('passagers'));
    }
}
