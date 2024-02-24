<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RolUsuario;

class RolUsuarioController extends Controller
{
    public function index()
    {
        $rolesUsuarios = RolUsuario::all();
        return response()->json($rolesUsuarios, 200);
    }

    public function store(Request $request)
    {
        $rolesUsuarios = RolUsuario::create($request->all());
        return response()->json($rolesUsuarios, 201);
    }

    public function show($id)
    {
        $rolesUsuarios = RolUsuario::findOrFail($id);
        return response()->json($rolesUsuarios, 200);
    }

    public function update(Request $request, $id)
    {
        $rolesUsuarios = RolUsuario::findOrFail($id);
        $rolesUsuarios->update($request->all());
        return response()->json($rolesUsuarios, 200);
    }

    public function destroy($id)
    {
        $rolesUsuarios = RolUsuario::findOrFail($id);
        $rolesUsuarios->delete();
        return response()->json(null, 204);
    }
}
