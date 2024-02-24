<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function index()
    {
        $materiales = Material::all();
        return response()->json($materiales, 200);
    }

    public function store(Request $request)
    {
        $materiales = Material::create($request->all());
        return response()->json($materiales, 201);
    }

    public function show($id)
    {
        $materiales = Material::findOrFail($id);
        return response()->json($materiales, 200);
    }

    public function update(Request $request, $id)
    {
        $materiales = Material::findOrFail($id);
        $materiales->update($request->all());
        return response()->json($materiales, 200);
    }

    public function destroy($id)
    {
        $materiales = Material::findOrFail($id);
        $materiales->delete();
        return response()->json(null, 204);
    }
}
