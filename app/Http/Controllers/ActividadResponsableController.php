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
        return view('actividadResponsable.index', compact('actividadResponsable'));
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

        return view('actividadResponsable.create', compact('actividades', 'responsables'));
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
            'ID_Actividad' => 'required|exists:actividad,ID_Actividad',
            'ID_Responsable' => 'required|exists:responsable,ID_Responsable',
        ]);

        // Crear una nueva relación en la tabla pivote
        ActividadResponsable::create([
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
        return view('actividadResponsable.show', compact('actividadResponsable'));
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

        return view('actividadResponsable.edit', compact('actividadResponsable', 'actividades', 'responsables'));
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
            'ID_Actividad' => 'required|exists:actividad,ID_Actividad',
            'ID_Responsable' => 'required|exists:responsable,ID_Responsable',
        ]);

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
