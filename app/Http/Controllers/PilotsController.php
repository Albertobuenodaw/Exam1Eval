<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\Request;

class PilotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pilot.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $pilot = new Pilot();
        $pilot->nombre = $request->nombre;
        $pilot->numero_licencia = $request->numero_licencia;
        $pilot->victorias = $request->victorias;
        $pilot->save();
   
       return view('pilot.index');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function show(Pilot $pilot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function edit(Pilot $pilot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pilot $pilot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilot $pilot)
    {
        //
    }
}
