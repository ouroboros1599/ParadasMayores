<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planificacion_Empresa;
use App\Models\Planificacion;
use App\Models\Empresa;

class PlanificacionEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planificacionEmpresas = Planificacion_Empresa::all();
        return view('planificacionEmpresa.index', compact('planificacionEmpresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planificaciones = Planificacion::all();
        $empresas = Empresa::all();
        return view('planificacionEmpresa.create', compact('planificaciones', 'empresas'));
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
            'Planificacion_ID_Planificacion' => 'required|exists:db_ParadaMayor.Planificacion,ID_Planificacion',
            'Empresa_ID_Empresa' => 'required|exists:db_ParadaMayor.Empresa,ID_Empresa',
        ]);

        // Crear una nueva relación Planificacion_Empresa
        Planificacion_Empresa::create([
            'Planificacion_ID_Planificacion' => $request->input('Planificacion_ID_Planificacion'),
            'Empresa_ID_Empresa' => $request->input('Empresa_ID_Empresa'),
        ]);

        // Redireccionamiento
        return redirect()->route('planificacionEmpresa.index')->with('success', 'Relación Planificacion-Empresa creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planificacionEmpresa = Planificacion_Empresa::findOrFail($id);
        return view('planificacionEmpresa.show', compact('planificacionEmpresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planificacionEmpresa = Planificacion_Empresa::findOrFail($id);
        $planificaciones = Planificacion::all();
        $empresas = Empresa::all();
        return view('planificacionEmpresa.edit', compact('planificacionEmpresa', 'planificaciones', 'empresas'));
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
            'Planificacion_ID_Planificacion' => 'required|exists:db_ParadaMayor.Planificacion,ID_Planificacion',
            'Empresa_ID_Empresa' => 'required|exists:db_ParadaMayor.Empresa,ID_Empresa',
        ]);

        // Actualizar la relación Planificacion_Empresa
        $planificacionEmpresa = Planificacion_Empresa::findOrFail($id);
        $planificacionEmpresa->update([
            'Planificacion_ID_Planificacion' => $request->input('Planificacion_ID_Planificacion'),
            'Empresa_ID_Empresa' => $request->input('Empresa_ID_Empresa'),
        ]);

        // Redireccionamiento
        return redirect()->route('planificacionEmpresa.index')->with('success', 'Relación Planificacion-Empresa actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar la relación Planificacion_Empresa
        $planificacionEmpresa = Planificacion_Empresa::findOrFail($id);
        $planificacionEmpresa->delete();

        // Redireccionamiento
        return redirect()->route('planificacionEmpresa.index')->with('success', 'Relación Planificacion-Empresa eliminada exitosamente.');
    }
}
