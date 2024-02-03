<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaterialActividad;

class MaterialActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materialActividad = MaterialActividad::all();
        return response()->json($materialActividad, 200);
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
        $materialActividad = MaterialActividad::create($request->all());
        return response()->json($materialActividad, 201);
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
        $materialActividad = MaterialActividad::findOrFail($id);
        return response()->json($materialActividad, 200);
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
        $materialActividad = MaterialActividad::findOrFail($id);
        $materialActividad->update($request->all());
        return response()->json($materialActividad, 200);
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
        $materialActividad = MaterialActividad::findOrFail($id);
        $materialActividad->delete();
        return response()->json(null, 204);
    }
}
