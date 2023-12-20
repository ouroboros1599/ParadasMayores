<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;
use App\Models\Cargo;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = Responsable::all();
        return view('responsable.index', compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        return view('responsable.create', compact('cargos'));
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
            'NombreResponsable' => 'required|string|max:50',
            'ApellidoPaternoResponsable' => 'required|string|max:50',
            'ApellidoMaternoResponsable' => 'required|string|max:50',
            'Cargo_ID_Cargo' => 'required|exists:db_ParadaMayor.Cargo,ID_Cargo',
        ]);

        // Crear un nuevo responsable
        $responsable = Responsable::create([
            'NombreResponsable' => $request->input('NombreResponsable'),
            'ApellidoPaternoResponsable' => $request->input('ApellidoPaternoResponsable'),
            'ApellidoMaternoResponsable' => $request->input('ApellidoMaternoResponsable'),
            'Cargo_ID_Cargo' => $request->input('Cargo_ID_Cargo'),
        ]);

        // Redireccionamiento
        return redirect()->route('responsable.index')->with('success', 'Responsable creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $responsable = Responsable::findOrFail($id);
        return view('responsable.show', compact('responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsable = Responsable::findOrFail($id);
        $cargos = Cargo::all();
        return view('responsable.edit', compact('responsable', 'cargos'));
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
            'NombreResponsable' => 'required|string|max:50',
            'ApellidoPaternoResponsable' => 'required|string|max:50',
            'ApellidoMaternoResponsable' => 'required|string|max:50',
            'Cargo_ID_Cargo' => 'required|exists:db_ParadaMayor.Cargo,ID_Cargo',
        ]);

        // Actualizar el responsable
        $responsable = Responsable::findOrFail($id);
        $responsable->update([
            'NombreResponsable' => $request->input('NombreResponsable'),
            'ApellidoPaternoResponsable' => $request->input('ApellidoPaternoResponsable'),
            'ApellidoMaternoResponsable' => $request->input('ApellidoMaternoResponsable'),
            'Cargo_ID_Cargo' => $request->input('Cargo_ID_Cargo'),
        ]);

        // Redireccionamiento
        return redirect()->route('responsable.index')->with('success', 'Responsable actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el responsable
        $responsable = Responsable::findOrFail($id);
        $responsable->delete();

        // Redireccionamiento
        return redirect()->route('responsable.index')->with('success', 'Responsable eliminado exitosamente.');
    }
}
