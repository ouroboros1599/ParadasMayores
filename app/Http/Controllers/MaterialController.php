<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Responsable;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = Material::all();
        return view('material.index', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsables = Responsable::all();
        return view('material.create', compact('responsables'));
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
            'NombreMaterial' => 'required|string|max:50|unique:material',
            'CantidadMaterialRequerida' => 'required|integer',
            'CantidadMaterialDisponible' => 'required|integer',
            'Ubicacion' => 'required|string|max:50',
            'Responsable_ID_Responsable' => 'required|exists:responsable,ID_Responsable',
        ]);

        // Crear un nuevo material
        Material::create([
            'NombreMaterial' => $request->input('NombreMaterial'),
            'CantidadMaterialRequerida' => $request->input('CantidadMaterialRequerida'),
            'CantidadMaterialDisponible' => $request->input('CantidadMaterialDisponible'),
            'Ubicacion' => $request->input('Ubicacion'),
            'Responsable_ID_Responsable' => $request->input('Responsable_ID_Responsable'),
        ]);

        // Redireccionamiento
        return redirect()->route('material.index')->with('success', 'Material creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = Material::findOrFail($id);
        return view('material.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = Material::findOrFail($id);
        $responsables = Responsable::all();
        return view('material.edit', compact('material', 'responsables'));
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
            'NombreMaterial' => 'required|string|max:50|unique:material,NombreMaterial,' . $id . ',ID_Material',
            'CantidadMaterialRequerida' => 'required|integer',
            'CantidadMaterialDisponible' => 'required|integer',
            'Ubicacion' => 'required|string|max:50',
            'Responsable_ID_Responsable' => 'required|exists:responsable,ID_Responsable',
        ]);

        // Actualizar el material
        $material = Material::findOrFail($id);
        $material->update([
            'NombreMaterial' => $request->input('NombreMaterial'),
            'CantidadMaterialRequerida' => $request->input('CantidadMaterialRequerida'),
            'CantidadMaterialDisponible' => $request->input('CantidadMaterialDisponible'),
            'Ubicacion' => $request->input('Ubicacion'),
            'Responsable_ID_Responsable' => $request->input('Responsable_ID_Responsable'),
        ]);

        // Redireccionamiento
        return redirect()->route('material.index')->with('success', 'Material actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el material
        $material = Material::findOrFail($id);
        $material->delete();

        // Redireccionamiento
        return redirect()->route('material.index')->with('success', 'Material eliminado exitosamente.');
    }
}
