<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParadaMayor;

class ParadaMayorController extends Controller
{
    public function index()
    {
        $paradasMayores = ParadaMayor::all();
        return response()->json($paradasMayores, 200);
    }

    public function store(Request $request)
    {
        $paradasMayores = ParadaMayor::create($request->all());
        return response()->json($paradasMayores, 201);
    }

    public function show($id)
    {
        $paradasMayores = ParadaMayor::findOrFail($id);
        return response()->json($paradasMayores, 200);
    }

    public function update(Request $request, $id)
    {
        $paradasMayores = ParadaMayor::findOrFail($id);
        $paradasMayores->update($request->all());
        return response()->json($paradasMayores, 200);
    }

    public function destroy($id)
    {
        $paradasMayores = ParadaMayor::findOrFail($id);
        $paradasMayores->delete();
        return response()->json(null, 204);
    }
}
