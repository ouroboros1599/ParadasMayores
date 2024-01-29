<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        // return view('empresa.index', compact('empresas'));
        return response()->json($empresas, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = Empresa::find($request->empresa_id);
        
        $empresa->empresas()->create([
            'NombreEmpresa' => '',
            'SectorParada' => '',
        ]);

        Empresa::create([
            'NombreEmpresa' => $request->input('NombreEmpresa'),
            'SectorParada' => $request->input('SectorParada'),
        ]);

        return response()->json($empresa, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::findOrFail($id);
        return response()->json($empresa, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $empresa = Empresa::findOrFail($id);
    //     return view('empresa.edit', ['empresa'=>$empresa]);
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

        $empresa = Empresa::findOrFail($id);
        $empresa->update([
            'NombreEmpresa' => $request->input('NombreEmpresa'),
            'SectorParada' => $request->input('SectorParada'),
        ]);

        return response()->json($empresa, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        return response()->json($empresa, 204);
    }
}
