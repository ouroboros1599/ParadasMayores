<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Tarea;
use App\Models\Material;
use App\Models\Personal;
use App\Models\ParadaMayor;
use Illuminate\Support\Facades\Log;


class PM_PlanificacionController extends Controller
{
    public function index()
    {
        // $tareas = Tarea::with('actividads', 'materials', 'personals')->get();
        // Log::info($tareas);
        // return view('pm_planificacion.index', compact('tareas'));
    }

    public function create(Request $request)
    {
        $pm = ParadaMayor::find($request->parada_mayor);

        return view('pm_planificacion.create', [
            'parada_mayor' => $pm->id,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            // Aquí deberías incluir tus reglas de validación
        ]);

        Log::info($request);

        $paradaMayor = ParadaMayor::findOrFail($request->paradaMayorId);

        $actividad = new Actividad;
        $actividad->nombreActividad = $request->nombreActividad;
        $actividad->critica = $request->critica;
        $actividad->inicioPlan = $request->inicioPlan;
        $actividad->finPlan = $request->finPlan;
        $actividad->save();

        $tarea = new Tarea();
        $tarea->nombreTarea = $request->nombreTarea;
        $tarea->ordenTrabajo = $request->ordenTrabajo;
        $tarea->campoRevision = $request->campoRevision;
        $tarea->cantidadMaterialRequerida = $request->cantidadMaterialRequerida;
        $tarea->save();

        $material = new Material();
        $material->nombreMaterial = $request->nombreMaterial;
        $material->ubicacion = $request->ubicacion;
        $material->save();

        $personal = new Personal();
        $personal->nombrePersonal = $request->nombrePersonal;
        $personal->servicioContratado = $request->servicioContratado;
        $personal->save();

        // Asociar las entidades creadas con la actividad utilizando attach para relaciones muchos a muchos
        $actividad->tareas()->attach($tarea->id);
        $tarea->materials()->attach($material->id);
        $tarea->personals()->attach($personal->id);

        // Asociar la actividad con la parada mayor
        $paradaMayor->actividads()->save($actividad);

        return 'exito';
    }

    public function show($id)
    {
        // $tareas = Tarea::with('actividad', 'material', 'personal')->findOrFail($id);
        // return $tareas;
        $parada_mayor = ParadaMayor::find($id);
        Log::info($parada_mayor);
        // $tareas = Tarea::with('actividads', 'materials', 'personals')->get();
        // Log::info($parada_mayor->actividad->tarea);
        $pm = $parada_mayor->actividads()->with('tareas.personals', 'tareas.materials')->get();
        Log::info($pm);
        return view('pm_planificacion.index', [
            'parada_mayor' => $parada_mayor,
            'actividads' => $pm,
        ]);
    }

    public function edit($id)
    {
        Log::info($id);
        // $actividad = Actividad::findOrFail($id);
        // $tarea = Tarea::findOrFail($id);
        // $material = Material::findOrFail($id);
        // $personal = Personal::findOrFail($id);

        $parada_mayor = ParadaMayor::find($id);
        $pm = $parada_mayor->actividads()->with('tareas.personals', 'tareas.materials')->get();

        return view('pm_planificacion.edit', [
            'parada_mayor' => $parada_mayor,
            'actividads' => $pm,
        ]);
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

        if ($actividad->tarea) {
            foreach ($actividad->tareas as $tarea) {
                foreach ($tarea->materials as $material) {
                    $material->delete();
                }
                foreach ($tarea->personals as $personal) {
                    $personal->delete();
                }
                $tarea->delete();
            }
        };
        $actividad->delete();

        return redirect()->route('pm_planificacion.index')->with('success', 'Planificación eliminada con exito!');
    }
}
