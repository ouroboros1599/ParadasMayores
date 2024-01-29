<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::all();
        // return view('rol.index', compact('roles'));
        return response()->json($roles, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Crear un nuevo rol
        $rol = Rol::find($request->rol_id);
        
        $rol->rols()->create([
            'NombreRol' => $request->input('NombreRol'),
        ]);

        // Redireccionamiento
        return response()->json($rol, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return response()->json($rol, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $rol = Rol::findOrFail($id);
    //     return view('rol.edit', ['rol'=>$rol]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Actualizar el rol
        $rol = Rol::findOrFail($id);
        $rol->update([
            'NombreRol' => $request->input('NombreRol'),
        ]);

        // Redireccionamiento
        return response()->json($rol, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el rol
        $rol = Rol::findOrFail($id);
        $rol->delete();

        // Redireccionamiento
        return response()->json($rol, 204);
    }
}
