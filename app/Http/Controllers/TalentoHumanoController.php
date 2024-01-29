<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentoHumano;
use App\Models\Responsable;

class TalentoHumanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talentoHumano = TalentoHumano::all();
        // return view('talentoHumano.index', compact('talentoHumano'));
        return response()->json($talentoHumano, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsables = Responsable::all();
        return view('talentoHumano.create', ['responsables'=>$responsables]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $talentoHumano = TalentoHumano::find($request->talentoHumano_id);
        $talentoHumano->talentoHumanos()->create([
            'NombreTalento' => $request->input('NombreTalento'),
            'CantidadTalentoHumanoRequerido' => $request->input('CantidadTalentoHumanoRequerido'),
            'CantidadTalentoHumanoDisponible' => $request->input('CantidadTalentoHumanoDisponible'),
            'Responsable_ID_Responsable' => $request->input('Responsable_ID_Responsable'),
        ]);

        // Redireccionamiento
        return response()->json($talentoHumano, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $talentoHumano = TalentoHumano::findOrFail($id);
        return response()->json($talentoHumano, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $talentoHumano = TalentoHumano::findOrFail($id);
    //     $responsables = Responsable::all();
    //     return view('talentoHumano.edit', ['talentoHumano'=>$talentoHumano,'responsables'=>$responsables]);
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

        // Actualizar el talento humano
        $talentoHumano = TalentoHumano::findOrFail($id);
        $talentoHumano->update([
            'NombreTalento' => $request->input('NombreTalento'),
            'CantidadTalentoHumanoRequerido' => $request->input('CantidadTalentoHumanoRequerido'),
            'CantidadTalentoHumanoDisponible' => $request->input('CantidadTalentoHumanoDisponible'),
            'Responsable_ID_Responsable' => $request->input('Responsable_ID_Responsable'),
        ]);

        // Redireccionamiento
        return response()->json($talentoHumano, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el talento humano
        $talentoHumano = TalentoHumano::findOrFail($id);
        $talentoHumano->delete();

        // Redireccionamiento
        return response()->json($talentoHumano, 204);
    }
}
