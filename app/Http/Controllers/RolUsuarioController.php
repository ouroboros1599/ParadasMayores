<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RolUsuario;

class RolUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rolesUsuarios = RolUsuario::all();
        return response()->json($rolesUsuarios, 200);
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
        $rolesUsuarios = RolUsuario::create($request->all());
        return response()->json($rolesUsuarios, 201);
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
        $rolesUsuarios = RolUsuario::findOrFail($id);
        return response()->json($rolesUsuarios, 200);
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
        $rolesUsuarios = RolUsuario::findOrFail($id);
        $rolesUsuarios->update($request->all());
        return response()->json($rolesUsuarios, 200);
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
        $rolesUsuarios = RolUsuario::findOrFail($id);
        $rolesUsuarios->delete();
        return response()->json(null, 204);
    }
}
