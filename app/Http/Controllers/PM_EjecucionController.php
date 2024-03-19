<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PM_EjecucionController extends Controller
{
    // Lista una cantidad de recursos (VIEW/JSON)
    public function index()
    {
        $user = Usuario::first();
        $parada_mayor = $user->paradaMayorActiva;
        $parada_mayor = $parada_mayor->with('actividads', 'actividads.tareas.personals', 'actividads.tareas.materials')->get();
        return view('pm_ejecucion.index', [
            'parada_mayor' => $parada_mayor->first(),
        ]);
    }

    // Muestra el formulario de creación (VIEW)
    public function create()
    {
        return view('pm_ejecucion.create');
    }

    // Almacena un recurso en BD (JSON)
    public function store(Request $request)
    {
    }

    // Muestra un recurso particular (JSON)
    public function show($id)
    {
    }

    // Muestra el formulario de edición (VIEW)
    public function edit($id)
    {
        return view('pm_ejecucion.edit');
    }

    // Actualiza el recurso en BD (JSON)
    public function update(Request $request, $id)
    {
    }

    // Destruye el recurso en BD (JSON)
    public function destroy($id)
    {
    }
}
