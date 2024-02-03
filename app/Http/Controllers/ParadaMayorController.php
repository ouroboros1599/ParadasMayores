<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParadaMayor;

class ParadaMayorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paradasMayores = ParadaMayor::all();
        return response()->json($paradasMayores, 200);
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
        $paradasMayores = ParadaMayor::create($request->all());
        return response()->json($paradasMayores, 201);
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
        $paradasMayores = ParadaMayor::findOrFail($id);
        return response()->json($paradasMayores, 200);
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
        $paradasMayores = ParadaMayor::findOrFail($id);
        $paradasMayores->update($request->all());
        return response()->json($paradasMayores, 200);
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
        $paradasMayores = ParadaMayor::findOrFail($id);
        $paradasMayores->delete();
        return response()->json(null, 204);
    }
}
