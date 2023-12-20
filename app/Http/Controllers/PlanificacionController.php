<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planificacion;
use App\Models\Empresa;

class PlanificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planificaciones = Planificacion::all();
        return view('planificacion.index', compact('planificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('planificacion.create', compact('empresas'));
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
            'NombreParada' => 'required|string|max:45',
            'FechaInicioPlanificada' => 'required|date',
            'FechaTerminoPlanificada' => 'required|date',
            'Empresa_ID_Empresa' => 'required|exists:db_ParadaMayor.Empresa,ID_Empresa',
        ]);

        // Crear una nueva planificación
        $planificacion = Planificacion::create([
            'NombreParada' => $request->input('NombreParada'),
            'FechaInicioPlanificada' => $request->input('FechaInicioPlanificada'),
            'FechaTerminoPlanificada' => $request->input('FechaTerminoPlanificada'),
            'Empresa_ID_Empresa' => $request->input('Empresa_ID_Empresa'),
        ]);

        // Redireccionamiento
        return redirect()->route('planificacion.index')->with('success', 'Planificación creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planificacion = Planificacion::findOrFail($id);
        return view('planificacion.show', compact('planificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planificacion = Planificacion::findOrFail($id);
        $empresas = Empresa::all();
        return view('planificacion.edit', compact('planificacion', 'empresas'));
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
            'NombreParada' => 'required|string|max:45',
            'FechaInicioPlanificada' => 'required|date',
            'FechaTerminoPlanificada' => 'required|date',
            'Empresa_ID_Empresa' => 'required|exists:db_ParadaMayor.Empresa,ID_Empresa',
        ]);

        // Actualizar la planificación
        $planificacion = Planificacion::findOrFail($id);
        $planificacion->update([
            'NombreParada' => $request->input('NombreParada'),
            'FechaInicioPlanificada' => $request->input('FechaInicioPlanificada'),
            'FechaTerminoPlanificada' => $request->input('FechaTerminoPlanificada'),
            'Empresa_ID_Empresa' => $request->input('Empresa_ID_Empresa'),
        ]);

        // Redireccionamiento
        return redirect()->route('planificacion.index')->with('success', 'Planificación actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar la planificación
        $planificacion = Planificacion::findOrFail($id);
        $planificacion->delete();

        // Redireccionamiento
        return redirect()->route('planificacion.index')->with('success', 'Planificación eliminada exitosamente.');
    }
}
