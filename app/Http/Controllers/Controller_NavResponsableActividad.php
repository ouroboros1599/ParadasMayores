<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavResponsableActividad;

class Controller_NavResponsableActividad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nav_resp_act = NavResponsableActividad::all();
        return view('NavResponsableActividad.index', compact('nav_resp_act'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('NavResponsableActividad.create');
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
        
        NavResponsableActividad::create($request->all());
        return redirect()->route('NavResponsableActividad.index')->with('success', 'creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(NavResponsableActividad $nav_resp_act)
    {
        //
        return view('NavResponsableActividad.show',compact('nav_resp_act'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NavResponsableActividad $nav_resp_act)
    {
        //
        return view('NavResponsableActividad.edit', compact('nav_resp_act'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NavResponsableActividad $nav_resp_act)
    {
        //
        $request->validate([

        ]);
        $nav_resp_act->update($request->all());

        return redirect()->route('NavResponsableActividad.index')->with('success','actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NavResponsableActividad $nav_resp_act)
    {
        //
        $nav_resp_act->delete();
        
        return redirect()->route('NavResponsableActividad.index')->with('success', 'eliminada exitosamente');
    }
}
