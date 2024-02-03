<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentoHumano;

class TalentoHumanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $talentosHumanos = TalentoHumano::all();
        return response()->json($talentosHumanos, 200);
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
        $talentosHumanos = TalentoHumano::create($request->all());
        return response()->json($talentosHumanos, 201);
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
        $talentosHumanos = TalentoHumano::findOrfail($id);
        return response()->json($talentosHumanos, 200);
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
        $talentosHumanos = TalentoHumano::findOrfail($id);
        $talentosHumanos->update($request->all());
        return response()->json($talentosHumanos, 200);
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
        $talentosHumanos = TalentoHumano::findOrfail($id);
        $talentosHumanos->delete();
        return response()->json($talentosHumanos, 204);
    }
}
