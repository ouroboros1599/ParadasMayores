<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RolActividad;

class RolActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rolesActividades = RolActividad::all();
        return response()->json($rolesActividades, 200);
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
        $rolesActividades = RolActividad::create($request->all());
        return response()->json($rolesActividades, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rolesActividades = RolActividad::findOrFail($id);
        return response()->json($rolesActividades, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rolesActividades = RolActividad::findOrFail($id);
        $rolesActividades->update($request->all());
        return response()->json($$rolesActividades, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rolesActividades = RolActividad::findOrFail($id);
        $rolesActividades->delete();
        return response()->json(null, 204);
    }
}
