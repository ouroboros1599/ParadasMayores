<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Tarea;
use App\Models\Material;
use App\Models\Personal;


class PM_PlanificacionController extends Controller
{
    public function index()
    {
        $actividades  = Actividad::all();
        $tareas = Tarea::all();
        $materiales = Material::all();
        $personals = Personal::all();

        return view('pm_planificacion.index', compact('actividades','tareas','materiales','personals'));
    }

    public function create()
    {
        return view('pm_planificacion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            //validaciones
        ]);

        Actividad::create($request->input('actividad'));
        Tarea::create($request->input('tarea'));
        Material::create($request->input('material'));
        Personal::create($request->input('personal'));

        return redirect()->route('pm_planificacion.index')->with('success', 'Planificación creada con exito');
    }

    public function show($id)
    {
        $actividad = Actividad::findOrFail($id);
        $tarea = Tarea::findOrFail($id);
        $material = Material::findOrFail($id);
        $personal = Personal::findOrFail($id);

        return view('pm_planificacion.show', compact('actividad','tarea','material','personal'));
    }

    public function edit($id)
    {
        $actividad = Actividad::findOrFail($id);
        $tarea = Tarea::findOrFail($id);
        $material = Material::findOrFail($id);
        $personal = Personal::findOrFail($id);
        

        return view('pm_planificacion.edit', compact('actividad','tarea','material','personal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            //validaciones
        ]);

        $actividad = Actividad::findOrFail($id);
        $tarea = Tarea::findOrFail($id);
        $material = Material::findOrFail($id);
        $personal = Personal::findOrFail($id);

        $actividad->update($request->input('actividad'));
        $tarea->update($request->input('tarea'));
        $material->update($request->input('material'));
        $personal->update($request->input('personal'));


        return redirect()->route('pm_planificacion.index')->with('success', 'Planificación actualizada con exito');
    }

    public function destroy($id)
    {
        $actividad = Actividad::findOrFail($id);
        $tarea = Tarea::findOrFail($id);
        $material = Material::findOrFail($id);
        $personal = Personal::findOrFail($id);

        $actividad->delete();
        $tarea->delete();
        $material->delete();
        $personal->delete();

        return redirect()->route('pm_planificacion.index')->with('success', 'Planificación eliminada con exito!');
    }
}
