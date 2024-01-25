<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActividadResponsable;
use App\Models\Actividad;
use App\Models\Responsable;

class ActividadResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividadResponsable = ActividadResponsable::with(['actividad', 'responsable'])->get();
        // return view('actividadResponsable.index', compact('actividadResponsable'));
        return $actividadResponsable;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividades = Actividad::all();
        $responsables = Responsable::all();

        return view('actividadResponsable.create', ['actividades'=>$actividades, 'responsables'=>$responsables]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividadResponsable = ActividadResponsable::find($request->responsable_id);

        $actividadResponsable->actividad_responsables()->create([
            'Actividad_ID_Actividad' => $request->input('ID_Actividad'),
            'Responsable_ID_Responsable' => $request->input('ID_Responsable'),
        ]);

        // Redireccionamiento
        return redirect()->route('actividadResponsable.index')->with('success', 'Relación creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividadResponsable = ActividadResponsable::with(['actividad', 'responsable'])->findOrFail($id);
        return view('actividadResponsable.show', ['actividadResponsable'=>$actividadResponsable]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividadResponsable = ActividadResponsable::findOrFail($id);
        $actividades = Actividad::all();
        $responsables = Responsable::all();

        return view('actividadResponsable.edit', ['actividadResponsable'=>$actividadResponsable, 'actividades'=>$actividades, 'responsables'=>$responsables]);
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
        // Actualizar la relación en la tabla pivote
        $actividadResponsable = ActividadResponsable::findOrFail($id);
        $actividadResponsable->update([
            'Actividad_ID_Actividad' => $request->input('ID_Actividad'),
            'Responsable_ID_Responsable' => $request->input('ID_Responsable'),
        ]);

        // Redireccionamiento
        return redirect()->route('actividadResponsable.index')->with('success', 'Relación actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar la relación en la tabla pivote
        $actividadResponsable = ActividadResponsable::findOrFail($id);
        $actividadResponsable->delete();

        // Redireccionamiento
        return redirect()->route('actividadResponsable.index')->with('success', 'Relación eliminada exitosamente.');
    }
}
