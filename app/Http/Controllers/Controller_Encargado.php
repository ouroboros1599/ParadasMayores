<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encargado;

class Controller_Encargado extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $encargado = Encargado::all();
        return view('Encargado.index', compact('encargado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Encargado.create');
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
        Encargado::create($request->all());
        return redirect()->route('Encargado.index')->with('success', 'creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Encargado $encargado)
    {
        //
        return view('Encargado.show',compact('encargado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Encargado $encargado)
    {
        //
        return view('Encargado.edit', compact('encargado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encargado $encargado)
    {
        //
        $request->validate([

        ]);
        $encargado->update($request->all());

        return redirect()->route('Encargado.index')->with('success','actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encargado $encargado)
    {
        //
        $encargado->delete();
        
        return redirect()->route('Encargado.index')->with('success', 'eliminada exitosamente');
    }
}
