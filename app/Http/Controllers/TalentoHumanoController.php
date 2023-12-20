<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentoHumano;
use App\Models\Responsable;

class TalentoHumanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talentoHumano = TalentoHumano::all();
        return view('talentoHumano.index', compact('talentoHumano'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsables = Responsable::all();
        return view('talentoHumano.create', compact('responsables'));
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
            'NombreTalento' => 'required|string|max:50',
            'CantidadTalentoHumanoRequerido' => 'required|integer',
            'CantidadTalentoHumanoDisponible' => 'required|integer',
            'Responsable_ID_Responsable' => 'required|exists:db_ParadaMayor.Responsable,ID_Responsable',
        ]);

        // Crear un nuevo talento humano
        $talentoHumano = TalentoHumano::create([
            'NombreTalento' => $request->input('NombreTalento'),
            'CantidadTalentoHumanoRequerido' => $request->input('CantidadTalentoHumanoRequerido'),
            'CantidadTalentoHumanoDisponible' => $request->input('CantidadTalentoHumanoDisponible'),
            'Responsable_ID_Responsable' => $request->input('Responsable_ID_Responsable'),
        ]);

        // Redireccionamiento
        return redirect()->route('talentoHumano.index')->with('success', 'Talento Humano creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $talentoHumano = TalentoHumano::findOrFail($id);
        return view('talentoHumano.show', compact('talentoHumano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $talentoHumano = TalentoHumano::findOrFail($id);
        $responsables = Responsable::all();
        return view('talentoHumano.edit', compact('talentoHumano', 'responsables'));
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
            'NombreTalento' => 'required|string|max:50',
            'CantidadTalentoHumanoRequerido' => 'required|integer',
            'CantidadTalentoHumanoDisponible' => 'required|integer',
            'Responsable_ID_Responsable' => 'required|exists:db_ParadaMayor.Responsable,ID_Responsable',
        ]);

        // Actualizar el talento humano
        $talentoHumano = TalentoHumano::findOrFail($id);
        $talentoHumano->update([
            'NombreTalento' => $request->input('NombreTalento'),
            'CantidadTalentoHumanoRequerido' => $request->input('CantidadTalentoHumanoRequerido'),
            'CantidadTalentoHumanoDisponible' => $request->input('CantidadTalentoHumanoDisponible'),
            'Responsable_ID_Responsable' => $request->input('Responsable_ID_Responsable'),
        ]);

        // Redireccionamiento
        return redirect()->route('talentoHumano.index')->with('success', 'Talento Humano actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el talento humano
        $talentoHumano = TalentoHumano::findOrFail($id);
        $talentoHumano->delete();

        // Redireccionamiento
        return redirect()->route('talentoHumano.index')->with('success', 'Talento Humano eliminado exitosamente.');
    }
}
