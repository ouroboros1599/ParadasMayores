<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class Controller_Actividad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actividad = Actividad::all();
        return view('Actividad.index', compact('actividad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Actividad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

        ]);
        
        Actividad::create($request->all());
        return redirect()->route('Actividad.index')->with('success', 'creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        //
        return view('Actividad.show',compact('actividad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        //
        return view('Actividad.edit', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $actividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        //
        $request->validate([

        ]);
        $actividad->update($request->all());

        return redirect()->route('Actividad.index')->with('success','actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        //
        $actividad->delete();
        
        return redirect()->route('Actividad.index')->with('success', 'eliminada exitosamente');
    }
}
