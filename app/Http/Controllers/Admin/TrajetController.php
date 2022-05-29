<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Trajet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrajetRequest;
use RealRashid\SweetAlert\Facades\Alert;

class TrajetController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $trajets = Auth::user()->trajets()->paginate(10);
       
        if(session('created')){
            Alert::success('Success Title', session('created'));
        }
        if(session('updated')){
            Alert::success('Success Title', session('updated'));
        }

        if(Auth::user()->isAdmin()){
            
            $trajets = Trajet::paginate(10);
        }
        return view('admin.trajets.index', compact('trajets'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trajets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrajetRequest $request)
    {
        Trajet::create($request->all());

        return redirect('conducteur/trajets')->with('created', 'Le trajet a été crée avec succée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trajet $trajet)
    {
        $passagers = $trajet->reservations()->get();


        return view('admin.trajets.show', compact('passagers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trajet $trajet)
    {
        return view('admin.trajets.edit', compact('trajet'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trajet $trajet)
    {
        $trajet->update($request->all());

        return redirect('conducteur/trajets')->with('updated', 'Le trajet a été modifié avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trajet $trajet)
    {
        $trajet->delete();

        return response()->json([
            "deleted" => "Trajet a été supprimé avec succée"
        ]);
    }
}
