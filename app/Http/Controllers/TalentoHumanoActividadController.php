<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentoHumanoActividad;

class TalentoHumanoActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $talentosHumanosActividades = TalentoHumanoActividad::all();
        return response()->json($talentosHumanosActividades, 200);
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
        $talentosHumanosActividades = TalentoHumanoActividad::create($request->all());
        return response()->json($talentosHumanosActividades, 201);
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
        $talentosHumanosActividades = TalentoHumanoActividad::findOrFail($id);
        return response()->json($talentosHumanosActividades);
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
        $talentosHumanosActividades = TalentoHumanoActividad::findOrFail($id);
        $talentosHumanosActividades->update($request->all());
        return response()->json($talentosHumanosActividades, 200);
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
        $talentosHumanosActividades = TalentoHumanoActividad::findOrFail($id);
        $talentosHumanosActividades->delete();
        return response()->json(null, 204);

    }
}
