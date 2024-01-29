<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanificacionEmpresa;
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
        $planificacionEmpresas = PlanificacionEmpresa::all();
        // return view('planificacionEmpresa.index', compact('planificacionEmpresas'));
        return response()->json($planificacionEmpresas, 200);
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
        return view('planificacionEmpresa.create', ['planificaciones'=>$planificaciones, 'empresas'=>$empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $planificacionEmpresa = PlanificacionEmpresa::find($request->planificacionEmpresa_id);

        $planificacionEmpresa->planificacionEmpresas()->create([
            'Planificacion_ID_Planificacion' => $request->input('Planificacion_ID_Planificacion'),
            'Empresa_ID_Empresa' => $request->input('Empresa_ID_Empresa'),
        ]);
        // Redireccionamiento
        return response()->json($planificacionEmpresa, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planificacionEmpresa = PlanificacionEmpresa::findOrFail($id);
        return response()->json($planificacionEmpresa, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $planificacionEmpresa = PlanificacionEmpresa::findOrFail($id);
    //     $planificaciones = Planificacion::all();
    //     $empresas = Empresa::all();
    //     return view('planificacionEmpresa.edit', ['planificacionEmpresa'=>$planificacionEmpresa, 'planificaciones'=>$planificaciones, 'empresas'=>$empresas]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Actualizar la relación Planificacion_Empresa
        $planificacionEmpresa = PlanificacionEmpresa::findOrFail($id);
        $planificacionEmpresa->update([
            'Planificacion_ID_Planificacion' => $request->input('Planificacion_ID_Planificacion'),
            'Empresa_ID_Empresa' => $request->input('Empresa_ID_Empresa'),
        ]);

        // Redireccionamiento
        return response()->json($planificacionEmpresa, 200);
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
        $planificacionEmpresa = PlanificacionEmpresa::findOrFail($id);
        $planificacionEmpresa->delete();

        // Redireccionamiento
        return response()->json($planificacionEmpresa, 204);
    }
}
