<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectorParada;

class Controller_SectorParada extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sector_parada = SectorParada::all();
        return view('SectorParada.index', compact('sector_parada'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('SectorParada.create');
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
        
        SectorParada::create($request->all());
        return redirect()->route('SectorParada.index')->with('success', 'creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SectorParada $sector_parada)
    {
        //
        return view('SectorParada.show',compact('sector_parada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SectorParada $sector_parada)
    {
        //
        return view('SectorParada.edit',compact('sector_parada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectorParada $sector_parada)
    {
        //
        $request->validate([

        ]);
        $sector_parada->update($request->all());

        return redirect()->route('SectorParada.index')->with('success','actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectorParada $sector_parada)
    {
        //
        $sector_parada->delete();
        
        return redirect()->route('SectorParada.index')->with('success', 'eliminada exitosamente');
    }
}
