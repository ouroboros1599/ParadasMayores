<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;

class Controller_Responsable extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $responsable = Responsable::all();
        return view('Responsable.index', compact('responsable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Responsable.create');
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
        
        Responsable::create($request->all());
        return redirect()->route('Responsable.index')->with('success', 'creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        //
        return view('Responsable.show',compact('responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Responsable $responsable)
    {
        //
        return view('Responsable.edit', compact('responsable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Responsable $responsable)
    {
        //
        $request->validate([

        ]);
        $responsable->update($request->all());

        return redirect()->route('Responsable.index')->with('success','actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsable $responsable)
    {
        //
        $responsable->delete();
        
        return redirect()->route('Responsable.index')->with('success', 'eliminada exitosamente');
    }
}
