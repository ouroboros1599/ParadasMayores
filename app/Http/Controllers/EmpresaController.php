<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return response()->json($empresas, 200);
    }

    public function store(Request $request)
    {
        $empresas = Empresa::create($request->all());
        return response()->json($empresas, 201);
    }

    public function show($id)
    {
        $empresas = Empresa::findOrFail($id);
        return response()->json($empresas, 200);
    }

    public function update(Request $request, $id)
    {
        $empresas = Empresa::findOrFail($id);
        $empresas->update($request->all());
        return response()->json($empresas, 200);
    }

    public function destroy($id)
    {
        $empresas = Empresa::findOrFail($id);
        $empresas->delete();
        return response()->json(null, 204);
    }
}
