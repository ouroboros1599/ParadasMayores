<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Empresa;
use App\Models\ParadaMayor;
use Illuminate\Support\Facades\Log;

class PM_ListadoController extends Controller
{
    public function index()
    {
        $paradasMayores = ParadaMayor::with('empresa')->get();
        Log::info($paradasMayores);
        
        return view('pm_listado.index', compact('paradasMayores'));
    }

    public function create()
    {
        return view('pm_listado.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            //validaciones
        ]);

        Log::info($request);

        $empresa = new Empresa;
        $empresa->nombreEmpresa = $request->nombreEmpresa;
        $empresa->divisionEmpresa = $request->divisionEmpresa;
        
        $empresa->save();
        
        $empresa->paradaMayor()->create( [
            'nombreParada' => $request->nombreParada,
            'estadoParada' => $request->estadoParada,
            'encargadoParada' => $request->encargadoParada,
            'inicioPlanificado' => $request->inicioPlanificado,
            'finPlanificado' => $request->finPlanificado,
        ] );
    }

    public function show($id)
    {
        $paradaMayor = ParadaMayor::with('empresa')->findOrFail($id);

        return view('pm_listado.show', compact('paradaMayor'));
    }

    public function edit($id)
    {
        $paradaMayor = ParadaMayor::with('empresa')->findOrFail($id);

        return view('pm_listado.edit', compact('paradaMayor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            //validaciones
        ]);

        $paradaMayor = ParadaMayor::findOrFail($id);

        $empresaId = $paradaMayor->empresa_id;
        $empresa = Empresa::findOrFail($empresaId);
        $empresa->update([
            'nombreEmpresa' => $request->nombreEmpresa,
            'divisionEmpresa' => $request->divisionEmpresa,
        ]);

        $paradaMayor->update([
            'nombreParada' => $request->nombreParada,
            'estadoParada' => $request->estadoParada,
            'encargadoParada' => $request->encargadoParada,
            'inicioPlanificado' => $request->inicioPlanificado,
            'finPlanificado' => $request->finPlanificado,
        ]);
        // $empresa = Empresa::findOrFail($id);
        // $empresa->update([
        //     'nombreEmpresa' => $request->nombreEmpresa,
        //     'divisionEmpresa' => $request->divisionEmpresa,
        // ]);

        // $paradaMayor = ParadaMayor::findOrFail($id);
        // $paradaMayor->update([
        //     'nombreParada' => $request->nombreParada,
        //     'estadoParada' => $request->estadoParada,
        //     'encargadoParada' => $request->encargadoParada,
        //     'inicioPlanificado' => $request->inicioPlanificado,
        //     'finPlanificado' => $request->finPlanificado,
        // ]);

        return redirect()->route('pm_listado.index')->with('success', 'Registros actualizados exitosamente!');
    }

    public function destroy($id)
    {
        $actividad = Actividad::findOrFail($id);
        $empresa = Empresa::findOrFail($id);
        $paradaMayor = ParadaMayor::findOrFail($id);

        $actividad->delete();
        $empresa->delete();
        $paradaMayor->delete();

        return redirect()->route('pm_listado.index')->with('success', 'Registros eliminados exitosamente!');
    }
}
