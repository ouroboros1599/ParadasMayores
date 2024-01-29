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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividad::all();
        // return $actividades;
        return response()->json($actividades, 200);
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

        return view('actividad.create', ['planificaciones'=>$planificaciones, 'responsables'=>$responsables, 'materiales'=>$materiales, 'talentoHumano'=>$talentoHumano]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $actividad = Actividad::find($request->actividad_id);

        $actividad->actividads()->create([
            'NombreActividad' => $request->input('NombreActividad'),
            'OrdenTrabajo' => $request->input('OrdenTrabajo'),
            'Critica' => $request->input('Critica'),
            'EstadoActividad' => $request->input('EstadoActividad'),
            'InicioReal' => $request->input('InicioReal'),
            'FinReal' => $request->input('FinReal'),
            'Planificacion_ID_Planificacion' => $request->input('Planificacion_ID_Planificacion'),
        ]);

        $actividad->materiales()->attach($request->input('ID_Material', []));
        $actividad->talentoHumano()->attach($request->input('ID_TalentoHumano', []));
        $actividad->responsables()->attach($request->input('ID_Responsable', []));

        // return redirect()->route('actividad.index')->with('success', 'Actividad creada exitosamente.');
        return response()->json($actividad, 201);
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
        return response()->json($actividad, 200); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $actividad = Actividad::findOrFail($id);
    //     $planificaciones = Planificacion::all();
    //     $responsables = Responsable::all();
    //     $materiales = Material::all();
    //     $talentoHumano = TalentoHumano::all();
    //     return view('actividad.edit', ['actividades'=>$actividad, 'planificaciones'=>$planificaciones, 'responsables'=>$responsables, 'materiales'=>$materiales, 'talentoHumano'=>$talentoHumano]);
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

        $actividad->materiales()->sync($request->input('ID_Material', []));
        $actividad->talentoHumano()->sync($request->input('ID_TalentoHumano', []));
        $actividad->responsables()->sync($request->input('ID_Responsable', []));

            return response()->json($actividad, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->materiales()->detach();
        $actividad->talentoHumano()->detach();
        $actividad->responsables()->detach();
        $actividad->delete();

        return response()->json(null, 204);
    }
}
