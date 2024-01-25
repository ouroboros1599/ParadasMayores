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
        return view('planificacion.index', ['planificaciones'=>$planificaciones]);
        // return $planificaciones;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('planificacion.create', ['empresas'=>$empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $planificacion = Planificacion::find($request->planificacion_id);

        $planificacion->planificacions()->create([
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
        return view('planificacion.show', ['planificacion'=>$planificacion]);
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
        return view('planificacion.edit', ['planificacion'=>$planificacion, 'empresas'=>$empresas]);
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
