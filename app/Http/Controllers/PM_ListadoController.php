<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Empresa;
use App\Models\ParadaMayor;


class PM_ListadoController extends Controller
{
    public function index()
    {
        
        return view('pm_listado.index');
    }

    public function create()
    {
        return view('pm_listado.create');
    }

    public function store(Request $request)
    {
        


        return redirect()->route('pm_listado.index')->with('succes', 'Planificación creada con exito');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
