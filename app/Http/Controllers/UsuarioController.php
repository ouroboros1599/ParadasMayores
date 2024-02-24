<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios, 200);
    }

    public function store(Request $request)
    {
        $usuarios = Usuario::create($request->all());
        return response()->json($usuarios, 201);
    }

    public function show($id)
    {
        $usuarios = Usuario::findOrFail($id);
        return response()->json($usuarios, 200);
    }

    public function update(Request $request, $id)
    {
        $usuarios = Usuario::findOrFail($id);
        $usuarios->update($request->all());
        return response()->json($usuarios, 200);
    }

    public function destroy($id)
    {
        $usuarios = Usuario::findOrFail($id);
        $usuarios->delete();
        return response()->json(null, 204);
    }
}
