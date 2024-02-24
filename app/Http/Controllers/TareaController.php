<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        return response()->json($tareas, 200);
    }

    public function store(Request $request)
    {
        $tareas = Tarea::create($request->all());
        return response()->json($tareas, 201);
    }

    public function show($id)
    {
        $tareas = Tarea::findOrFail($id);
        return response()->json($tareas, 200);
    }

    public function update(Request $request, $id)
    {
        $tareas = Tarea::findOrFail($id);
        $tareas->update($request->all());
        return response()->json($tareas, 200);
    }

    public function destroy($id)
    {
        $tareas = Tarea::findOrFail($id);
        $tareas->delete();
        return response()->json(null, 204);
    }
}
