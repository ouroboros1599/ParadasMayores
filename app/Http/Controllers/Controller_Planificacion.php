<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planificacion;

class Controller_Planificacion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $planificacion = Planificacion::all();
        return view('Planificacion.index', compact('planificacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Planificacion.create');
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
        
        Planificacion::create($request->all());
        return redirect()->route('Planificacion.index')->with('success', 'creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Planificacion $planificacion)
    {
        //
        return view('Planificacion.show',compact('planificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Planificacion $planificacion)
    {
        //
        return view('Planificacion.edit', compact('planificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planificacion $planificacion)
    {
        //
        $request->validate([

        ]);
        $planificacion->update($request->all());

        return redirect()->route('Planificacion.index')->with('success','actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planificacion $planificacion)
    {
        //
        $planificacion->delete();
        
        return redirect()->route('Planificacion.index')->with('success', 'eliminada exitosamente');
    }
}
