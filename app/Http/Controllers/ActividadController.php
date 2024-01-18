<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Responsable;
use App\Models\Material;
use App\Models\TalentoHumano;
use App\Models\Planificacion;
use Illuminate\Support\Facades\Log;

class ActividadController extends Controller
{
    public function test(){
        $actividad = Actividad::all();
        // Log::info($actividad);
        return $actividad;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividad::all();
        // return view('actividad.index', compact('actividades'));
        return $actividades;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planificaciones = Planificacion::all();
        $responsables = Responsable::all();
        $materiales = Material::all();
        $talentoHumano = TalentoHumano::all();

        return view('actividad.create', compact('planificaciones', 'responsables', 'materiales', 'talentoHumano'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación de campos
        $request->validate([
            'NombreActividad' => 'required|string|max:50',
            'OrdenTrabajo' => 'required|string|max:50',
            'Critica' => 'required|boolean',
            'EstadoActividad' => 'required|string|max:50',
            'InicioReal' => 'nullable|date',
            'FinReal' => 'nullable|date',
            'Planificacion_ID_Planificacion' => 'required|exists:planificacion,ID_Planificacion',
            'ID_TalentoHumano.*' => 'exists:talentohumano,ID_TalentoHumano', 
            'ID_Material.*' => 'exists:material,ID_Material', 
            'ID_Responsable.*' => 'exists:responsable,ID_Responsable', 
        ]);

        // Crear una nueva actividad
        $actividad = Actividad::create([
            'NombreActividad' => $request->input('NombreActividad'),
            'OrdenTrabajo' => $request->input('OrdenTrabajo'),
            'Critica' => $request->input('Critica'),
            'EstadoActividad' => $request->input('EstadoActividad'),
            'InicioReal' => $request->input('InicioReal'),
            'FinReal' => $request->input('FinReal'),
            'Planificacion_ID_Planificacion' => $request->input('Planificacion_ID_Planificacion'),
        ]);

        // Asociaciones con talento humano, materiales y responsables
        $actividad->materiales()->attach($request->input('ID_Material', []));
        $actividad->talentoHumano()->attach($request->input('ID_TalentoHumano', []));
        $actividad->responsables()->attach($request->input('ID_Responsable', []));

        // Redireccionamiento
        return redirect()->route('actividad.index')->with('success', 'Actividad creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividad = Actividad::findOrFail($id);
        return view('actividad.show', compact('actividad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad = Actividad::findOrFail($id);
        $planificaciones = Planificacion::all();
        $responsables = Responsable::all();
        $materiales = Material::all();
        $talentoHumano = TalentoHumano::all();

        return view('actividad.edit', compact('actividad', 'planificaciones', 'responsables', 'materiales', 'talentoHumano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validación de campos
        $request->validate([
            'NombreActividad' => 'required|string|max:50',
            'OrdenTrabajo' => 'required|string|max:50',
            'Critica' => 'required|boolean',
            'EstadoActividad' => 'required|string|max:50',
            'InicioReal' => 'nullable|date',
            'FinReal' => 'nullable|date',
            'Planificacion_ID_Planificacion' => 'required|exists:planificacion,ID_Planificacion',
            'ID_TalentoHumano.*' => 'exists:talentohumano,ID_TalentoHumano', 
            'ID_Material.*' => 'exists:material,ID_Material', 
            'ID_Responsable.*' => 'exists:responsable,ID_Responsable', 
        ]);

        // Actualizar la actividad
        $actividad = Actividad::findOrFail($id);
        $actividad->update([
            'NombreActividad' => $request->input('NombreActividad'),
            'OrdenTrabajo' => $request->input('OrdenTrabajo'),
            'Critica' => $request->input('Critica'),
            'EstadoActividad' => $request->input('EstadoActividad'),
            'InicioReal' => $request->input('InicioReal'),
            'FinReal' => $request->input('FinReal'),
            'Planificacion_ID_Planificacion' => $request->input('Planificacion_ID_Planificacion'),
        ]);

        // Sincronizar las asociaciones con talento humano, materiales y responsables
        $actividad->materiales()->sync($request->input('ID_Material', []));
        $actividad->talentoHumano()->sync($request->input('ID_TalentoHumano', []));
        $actividad->responsables()->sync($request->input('ID_Responsable', []));

        // Redireccionamiento
        return redirect()->route('actividad.index')->with('success', 'Actividad actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar la actividad
        $actividad = Actividad::findOrFail($id);
        $actividad->materiales()->detach();
        $actividad->talentoHumano()->detach();
        $actividad->responsables()->detach();
        $actividad->delete();

        // Redireccionamiento
        return redirect()->route('actividad.index')->with('success', 'Actividad eliminada exitosamente.');
    }
}
