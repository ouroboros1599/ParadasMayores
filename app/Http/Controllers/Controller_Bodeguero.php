<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodeguero;

class Controller_Bodeguero extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bodeguero = Bodeguero::all();
        return view('Bodeguero.index', compact('bodeguero'))
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Bodeguero.create');
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
        Bodeguero::create($request->all());
        return redirect()->('Bodeguero.index')->with('success','creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bodeguero $bodeguero)
    {
        //
        return view('Bodeguero.show', compact('bodeguero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodeguero $bodeguero)
    {
        //
        return view('Bodeguero.edit', compact('bodeguero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodeguero $bodeguero)
    {
        //
        $request->validate([

        ]);
        $bodeguero->update($request->all());

        return redirect()->route('Bodeguero.index')->with('success', 'creado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodeguero $bodeguero)
    {
        //
        $bodeguero->delete();
        return redirect()->route('Bodeguero.index')->with('success', 'eliminado exitosamente');
    }
}
