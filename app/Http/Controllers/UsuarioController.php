<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Rol;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        return view('usuario.create', compact('roles'));
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
            'NombreUsuario' => 'required|string|max:45',
            'Correo' => 'required|string|email|max:100|unique:db_ParadaMayor.Usuario,Correo',
            'Contrasenia' => 'required|string|max:20',
            'Rol_ID_Rol' => 'required|exists:db_ParadaMayor.Rol,ID_Rol',
        ]);

        // Crear un nuevo usuario
        $usuario = Usuario::create([
            'NombreUsuario' => $request->input('NombreUsuario'),
            'Correo' => $request->input('Correo'),
            'Contrasenia' => $request->input('Contrasenia'),
            'Rol_ID_Rol' => $request->input('Rol_ID_Rol'),
        ]);

        // Redireccionamiento
        return redirect()->route('usuario.index')->with('success', 'Usuario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $roles = Rol::all();
        return view('usuario.edit', compact('usuario', 'roles'));
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
            'NombreUsuario' => 'required|string|max:45',
            'Correo' => 'required|string|email|max:100|unique:db_ParadaMayor.Usuario,Correo,' . $id . ',ID_Usuario',
            'Contrasenia' => 'required|string|max:20',
            'Rol_ID_Rol' => 'required|exists:db_ParadaMayor.Rol,ID_Rol',
        ]);

        // Actualizar el usuario
        $usuario = Usuario::findOrFail($id);
        $usuario->update([
            'NombreUsuario' => $request->input('NombreUsuario'),
            'Correo' => $request->input('Correo'),
            'Contrasenia' => $request->input('Contrasenia'),
            'Rol_ID_Rol' => $request->input('Rol_ID_Rol'),
        ]);

        // Redireccionamiento
        return redirect()->route('usuario.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el usuario
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        // Redireccionamiento
        return redirect()->route('usuario.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
