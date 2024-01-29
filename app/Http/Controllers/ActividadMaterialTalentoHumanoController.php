<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActividadMaterialTalentoHumano;
use App\Models\Actividad;
use App\Models\Material;
use App\Models\TalentoHumano;

class ActividadMaterialTalentoHumanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::with(['actividad', 'material', 'talentoHumano'])->get();
        // return view('actividadMaterialTalentoHumano.index', compact('actividadMaterialTalentoHumano'));
        return response()->json($actividadMaterialTalentoHumano, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividades = Actividad::all();
        $materiales = Material::all();
        $talentoHumano = TalentoHumano::all();

        return view('actividadMaterialTalentoHumano.create', ['actividades'=>$actividades, 'materiales'=>$materiales, 'talentoHumano'=>$talentoHumano]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::find($request->materialTalentoHumano_id);
        
        $actividadMaterialTalentoHumano->actividad_material_talento_humanos()->create([
            'Actividad_ID_Actividad' => $request->input('ID_Actividad'),
            'Material_ID_Material' => $request->input('ID_Material'),
            'TalentoHumano_ID_TalentoHumano' => $request->input('ID_talentoHumano'),
        ]);

        return response()->json($actividadMaterialTalentoHumano, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relacion = ActividadMaterialTalentoHumano::with(['actividad', 'material', 'talentoHumano'])->findOrFail($id);
        // return view('actividadMaterialTalentoHumano.show', ['relacion'=>$relacion]);
        return response()->json($relacion, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $ActividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::findOrFail($id);
    //     $actividades = Actividad::all();
    //     $materiales = Material::all();
    //     $talentoHumano = TalentoHumano::all();

    //     return view('actividadMaterialTalentoHumano.edit', ['ActividadMaterialTalentoHumano'=>$ActividadMaterialTalentoHumano, 'actividades'=>$actividades, 'materiales'=>$materiales, 'talentoHumano'=>$talentoHumano]);
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

        $ActividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::findOrFail($id);
        $ActividadMaterialTalentoHumano->update([
            'Actividad_ID_Actividad' => $request->input('ID_Actividad'),
            'Material_ID_Material' => $request->input('ID_Material'),
            'TalentoHumano_ID_TalentoHumano' => $request->input('ID_TalentoHumano'),
        ]);

        return response()->json($ActividadMaterialTalentoHumano, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ActividadMaterialTalentoHumano = ActividadMaterialTalentoHumano::findOrFail($id);
        $ActividadMaterialTalentoHumano->delete();

        return response()->json(null, 204);
    }
}
