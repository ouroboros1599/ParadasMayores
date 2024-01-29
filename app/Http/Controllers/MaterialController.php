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
        // return view('material.index', compact('materiales'));
        return response()->json($materiales, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsables = Responsable::all();
        return view('material.create', ['responsables'=>$responsables]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = Material::find($request->material_id);

        $material->materials()->create([
            'NombreMaterial' => $request->input('NombreMaterial'),
            'CantidadMaterialRequerida' => $request->input('CantidadMaterialRequerida'),
            'CantidadMaterialDisponible' => $request->input('CantidadMaterialDisponible'),
            'Ubicacion' => $request->input('Ubicacion'),
            'Responsable_ID_Responsable' => $request->input('Responsable_ID_Responsable'),
        ]);
        
        return response()->json($material, 201);
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
        return response()->json($material, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $material = Material::findOrFail($id);
    //     $responsables = Responsable::all();
    //     return view('material.edit', ['material'=>$material, 'responsables'=>$responsables]);
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
        return response()->json($material, 200);
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
        return response()->json($material, 204);
    }
}
