<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return response()->json($actividades, 200);
    }
    
    public function store(Request $request)
    {
        $actividades = Actividad::create($request->all());
        return response()->json($actividades, 201);
    }
    
    public function show($id)
    {
        $actividades = Actividad::findOrFail($id);
        return response()->json($actividades, 200);
    }

    public function update(Request $request, $id)
    {
        $actividades = Actividad::findOrFail($id);
        $actividades->update($request->all());
        return response()->json($actividades, 200);
    }

    public function destroy($id)
    {
        $actividades = Actividad::findOrFail($id);
        $actividades->delete();
        return response()->json(null, 204);
    }
}
