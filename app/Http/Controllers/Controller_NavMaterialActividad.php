<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavMaterialActividad;

class Controller_NavMaterialActividad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nav_mat_act = NavMaterialActividad::all();
        return view('NavMaterialActividad.index', compact('nav_mat_act'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('NavMaterialActividad.create');
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
        
        NavMaterialActividad::create($request->all());
        return redirect()->route('NavMaterialActividad.index')->with('success', 'creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(NavMaterialActividad $nav_mat_act)
    {
        //
        return view('NavMaterialActividad.show',compact('nav_mat_act'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NavMaterialActividad $nav_mat_act)
    {
        //
        return view('NavMaterialActividad.edit', compact('nav_mat_act'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NavMaterialActividad $nav_mat_act)
    {
        //
        $request->validate([

        ]);
        $nav_mat_act->update($request->all());

        return redirect()->route('NavMaterialActividad.index')->with('success','actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NavMaterialActividad $nav_mat_act)
    {
        //
        $nav_mat_act->delete();
        
        return redirect()->route('NavMaterialActividad.index')->with('success', 'eliminada exitosamente');
    }
}
