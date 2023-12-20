<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::all();
        return view('cargo.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargo.create');
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
            'NombreCargo' => 'required|string|max:50|unique:cargo',
        ]);

        // Crear un nuevo cargo
        Cargo::create([
            'NombreCargo' => $request->input('NombreCargo'),
        ]);

        // Redireccionamiento
        return redirect()->route('cargo.index')->with('success', 'Cargo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('cargo.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('cargo.edit', compact('cargo'));
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
            'NombreCargo' => 'required|string|max:50|unique:cargo,NombreCargo,' . $id . ',ID_Cargo',
        ]);

        // Actualizar el cargo
        $cargo = Cargo::findOrFail($id);
        $cargo->update([
            'NombreCargo' => $request->input('NombreCargo'),
        ]);

        // Redireccionamiento
        return redirect()->route('cargo.index')->with('success', 'Cargo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el cargo
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();

        // Redireccionamiento
        return redirect()->route('cargo.index')->with('success', 'Cargo eliminado exitosamente.');
    }
}
