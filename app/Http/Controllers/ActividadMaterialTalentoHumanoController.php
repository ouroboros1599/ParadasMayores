<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActividadMaterialTalentoHumano;
use App\Models\Actividad;
use App\Models\Material;
use App\Models\TalentoHumano;

class ActividadMaterialTalentoHumanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::with(['actividad', 'material', 'talentoHumano'])->get();
        return view('actividadMaterialTalentoHumano.index', compact('actividadMaterialTalentoHumano'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividades = Actividad::all();
        $materiales = Material::all();
        $talentoHumano = TalentoHumano::all();

        return view('actividadMaterialTalentoHumano.create', compact('actividades', 'materiales', 'talentoHumano'));
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
            'ID_Material' => 'required|exists:material,ID_Material',
            'ID_talentoHumano' => 'required|exists:talento_humano,ID_TalentoHumano',
        ]);

        // Crear una nueva relación en la tabla pivote
        ActividadMaterialTalentoHumano::create([
            'Actividad_ID_Actividad' => $request->input('ID_Actividad'),
            'Material_ID_Material' => $request->input('ID_Material'),
            'TalentoHumano_ID_TalentoHumano' => $request->input('ID_talentoHumano'),
        ]);

        // Redireccionamiento
        return redirect()->route('actividadMaterialTalentoHumano.index')->with('success', 'Relación creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relacion = ActividadMaterialTalentoHumano::with(['actividad', 'material', 'talentoHumano'])->findOrFail($id);
        return view('actividadMaterialTalentoHumano.show', compact('relacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ActividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::findOrFail($id);
        $actividades = Actividad::all();
        $materiales = Material::all();
        $talentoHumano = TalentoHumano::all();

        return view('actividadMaterialTalentoHumano.edit', compact('ActividadMaterialTalentoHumano', 'actividades', 'materiales', 'talentoHumano'));
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
            'ID_Material' => 'required|exists:material,ID_Material',
            'ID_TalentoHumano' => 'required|exists:talento_humano,ID_TalentoHumano',
        ]);

        // Actualizar la relación en la tabla pivote
        $ActividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::findOrFail($id);
        $ActividadMaterialTalentoHumano->update([
            'Actividad_ID_Actividad' => $request->input('ID_Actividad'),
            'Material_ID_Material' => $request->input('ID_Material'),
            'TalentoHumano_ID_TalentoHumano' => $request->input('ID_TalentoHumano'),
        ]);

        // Redireccionamiento
        return redirect()->route('actividadMaterialTalentoHumano.index')->with('success', 'Relación actualizada exitosamente.');
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
        $ActividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::findOrFail($id);
        $ActividadMaterialTalentoHumano->delete();

        // Redireccionamiento
        return redirect()->route('actividadMaterialTalentoHumano.index')->with('success', 'Relación eliminada exitosamente.');
    }
}
