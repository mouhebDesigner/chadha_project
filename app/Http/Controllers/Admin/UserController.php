<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.users.index', compact('users'));
    }

    public function approuver($id){
        $user = User::find($id);

        $user->approuver = true;

        $user->save();

        return redirect('admin/users')->with('created', 'compte utilisateur a été approuvé avec succée');
    }
    
    public function destroy($id)
    {
        User::find($id)->delete();
        
        return redirect('admin/users')->with('deleted', 'compte utilisateur a été supprimé avec succée');
    }
}
