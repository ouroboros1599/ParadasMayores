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
        $actividades = Actividad::all();
        $empresas = Empresa::all();
        $paradasMayores = ParadaMayor::all();

        return view('pm_listado.index', compact('actividades', 'empresas', 'paradasMayores'));
    }

    public function create()
    {
        return view('pm_listado.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            //validaciones
        // 'actividad.inicioReal' => 'required|date_format:d/m/Y\H:i',
        // 'actividad.finReal' => 'required|date_format:d/m/Y\H:i',
        // 'empresa.nombreEmpresa' => 'required|string',
        // 'empresa.divisionEmpresa' => 'required|string',
        // 'paradaMayor.nombreParada' => 'required|string',
        // 'paradaMayor.estadoParada' => 'required|string',
        // 'paradaMayor.inicioPlanificado' => 'required|date_format:d/m/Y\H:i',
        // 'paradaMayor.finPlanificado' => 'required|date_format:d/m/Y\H:i',
        ]);

        //instancias de cada clase para guardar los datos
        Actividad::create([
            'inicioReal' => $request->input('actividad.inicioReal'),
            'finReal' => $request->input('actividad.finReal'),

        ]);

        Empresa::create([
            'nombreEmpresa' => $request->input('empresa.nombreEmpresa'),
            'divisionEmpresa' => $request->input('empresa.divisionEmpresa'),
        ]);

        ParadaMayor::create([
            'nombreParada' => $request->input('paradaMayor.nombreParada'),
            'estadoParada' => $request->input('paradaMayor.estadoParada'),
            'inicioPlanificado' => $request->input('paradaMayor.inicioPlanificado'),
            'finPlanificado' => $request->input('paradaMayor.finPlanificado'),
        ]);

        Log::info('Datos recibidos del formulario:', $request->all());
    
    // Proceso de guardado en la base de datos
    
        Log::info('Datos guardados correctamente en la base de datos');

        return redirect()->route('pm_listado.index')->with('success', 'Planificación creada con exito');
    }

    public function show($id)
    {
        $actividad = Actividad::findOrFail($id);
        $empresa = Empresa::findOrFail($id);
        $paradaMayor = ParadaMayor::findOrFail($id);

        return view('pm_listado.show', compact('actividad', 'empresa', 'paradaMayor'));
    }

    public function edit($id)
    {
        $actividad = Actividad::findOrFail($id);
        $empresa = Empresa::findOrFail($id);
        $paradaMayor = ParadaMayor::findOrFail($id);

        return view('pm_listado.edit', compact('actividad', 'empresa', 'paradaMayor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            //validaciones
        // 'actividad.inicioReal' => 'required|date_format:d/m/Y\H:i',
        // 'actividad.finReal' => 'required|date_format:d/m/Y\H:i',
        // 'empresa.nombreEmpresa' => 'required|string',
        // 'empresa.divisionEmpresa' => 'required|string',
        // 'paradaMayor.nombreParada' => 'required|string',
        // 'paradaMayor.estadoParada' => 'required|string',
        // 'paradaMayor.inicioPlanificado' => 'required|date_format:d/m/Y\H:i',
        // 'paradaMayor.finPlanificado' => 'required|date_format:d/m/Y\H:i',
        ]);

        $actividad = Actividad::findOrFail($id);
        $actividad->update([
            'inicioReal' => $request->input('actividad.inicioReal'),
            'finReal' => $request->input('actividad.finReal'),
        ]);

        $empresa = Empresa::findOrFail($id);
        $empresa->update([
            'nombreEmpresa' => $request->input('empresa.nombreEmpresa'),
            'divisionEmpresa' => $request->input('empresa.divisionEmpresa'),
        ]);

        $paradaMayor = ParadaMayor::findOrFail($id);
        $paradaMayor->update([
            'nombreParada' => $request->input('paradaMayor.nombreParada'),
            'estadoParada' => $request->input('paradaMayor.estadoParada'),
            'inicioPlanificado' => $request->input('paradaMayor.inicioPlanificado'),
            'finPlanificado' => $request->input('paradaMayor.finPlanificado'),
        ]);

        return redirect()->route('pm_listad.index')->with('success', 'Registros actualizados exitosamente!');
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
