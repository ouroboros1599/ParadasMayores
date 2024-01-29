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
        // return view('responsable.index', compact('responsables'));
        return response()->json($responsables, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        return response()->json($cargos, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $responsable = Responsable::find($request->responsable_id);

        $responsable->responsables()->create([
            'NombreResponsable' => $request->input('NombreResponsable'),
            'ApellidoPaternoResponsable' => $request->input('ApellidoPaternoResponsable'),
            'ApellidoMaternoResponsable' => $request->input('ApellidoMaternoResponsable'),
            'Cargo_ID_Cargo' => $request->input('Cargo_ID_Cargo'),
        ]);
        // Redireccionamiento
        return response()->json($responsable, 201);
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
        return response()->json($responsable, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $responsable = Responsable::findOrFail($id);
    //     $cargos = Cargo::all();
    //     return view('responsable.edit', ['responsable'=>$responsable, 'cargos'=>$cargos]);
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

        // Actualizar el responsable
        $responsable = Responsable::findOrFail($id);
        $responsable->update([
            'NombreResponsable' => $request->input('NombreResponsable'),
            'ApellidoPaternoResponsable' => $request->input('ApellidoPaternoResponsable'),
            'ApellidoMaternoResponsable' => $request->input('ApellidoMaternoResponsable'),
            'Cargo_ID_Cargo' => $request->input('Cargo_ID_Cargo'),
        ]);

        // Redireccionamiento
        return response()->json($responsable, 200);
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
        return response()->json($responsable, 204);
    }
}
