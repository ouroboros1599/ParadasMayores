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
        return view('empresa.index', compact('empresas'));
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
        // Validación de campos
        $request->validate([
            'NombreEmpresa' => 'required|string|max:50|unique:empresa',
            'SectorParada' => 'required|string|max:50',
        ]);

        // Crear una nueva empresa
        Empresa::create([
            'NombreEmpresa' => $request->input('NombreEmpresa'),
            'SectorParada' => $request->input('SectorParada'),
        ]);

        // Redireccionamiento
        return redirect()->route('empresa.index')->with('success', 'Empresa creada exitosamente.');
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
        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('empresa.edit', compact('empresa'));
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
            'NombreEmpresa' => 'required|string|max:50|unique:empresa,NombreEmpresa,' . $id . ',ID_Empresa',
            'SectorParada' => 'required|string|max:50',
        ]);

        // Actualizar la empresa
        $empresa = Empresa::findOrFail($id);
        $empresa->update([
            'NombreEmpresa' => $request->input('NombreEmpresa'),
            'SectorParada' => $request->input('SectorParada'),
        ]);

        // Redireccionamiento
        return redirect()->route('empresa.index')->with('success', 'Empresa actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar la empresa
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        // Redireccionamiento
        return redirect()->route('empresa.index')->with('success', 'Empresa eliminada exitosamente.');
    }
}
