<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Trajet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrajetRequest;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $trajets = Auth::user()->trajets()->paginate(10);
       
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
