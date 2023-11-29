<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentoHumano;

class Controller_TalentoHumano extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $talento_humano = TalentoHumano::all();
        return view('TalentoHumano.index', compact('talento_humano'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('TalentoHumano.create');
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
        
        TalentoHumano::create($request->all());
        return redirect()->route('TalentoHumano.index')->with('success', 'creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TalentoHumano $talento_humano)
    {
        //
        return view('TalentoHumano.show',compact('talento_humano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TalentoHumano $talento_humano)
    {
        //
        return view('TalentoHumano.edit', compact('talento_humano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TalentoHumano $talento_humano)
    {
        //
        $request->validate([

        ]);
        $talento_humano->update($request->all());

        return redirect()->route('TalentoHumano.index')->with('success','actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TalentoHumano $talento_humano)
    {
        //
        $talento_humano->delete();
        
        return redirect()->route('TalentoHumano.index')->with('success', 'eliminada exitosamente');
    }
}
