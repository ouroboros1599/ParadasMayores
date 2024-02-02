<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils as PromiseUtils;
use Illuminate\Http\Request;
//importar otras clases a las cuales se les va a hacer peticiones GET - POST
use App\Models\Empresa;
use App\Models\Actividad;
use App\Models\Responsable;
use App\Models\Material;
use App\Models\TalentoHumano;

class PM_PlanificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pm_planificacion.index');
        // $url = 'http://localhost:8000/web/';
        // $axios = new \GuzzleHttp\Client(['uri'=>$url]);
        
        // $promises = [
        //     'empresa'=>$axios->getAsync('empresa'),
        //     'actividad'=>$axios->getAsync('actividad'),
        //     'responsable'=>$axios->getAsync('responsable'),
        //     'material'=>$axios->getAsync('material'),
        //     'talentoHumano'=>$axios->getAsync('talentohumano'),
        // ];

        // $results = PromiseUtils::all($promises)->wait();

        // $empresaData = $results['empresa']->getBody()->getContents();
        // $actividadData = $results['actividad']->getBody()->getContents();
        // $responsableData = $results['responsable']->getBody()->getContents();
        // $materialData = $results['material']->getBody()->getContents();
        // $talentohumanoData = $results['talentohumano']->getBody()->getContents();

        // cache()->put('empresaData', $empresaData, 3600);
        // cache()->put('actividadData', $actividadData ,3600);
        // cache()->put('responsableData', $responsableData ,3600);
        // cache()->put('materialData', $materialData ,3600);
        // cache()->put('talentohumanoData', $talentohumanoData ,3600);

        // return view('pm_planificacion.index', compact('empresaData',
        //                                               'actividadData',
        //                                               'responsableData',
        //                                               'materialData',
        //                                               'talentohumanoData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $url  = 'http://localhost:8000/web/';
        $axios = new Client(['uri' =>$url]);

        $promises = [
            'planificaciones'=>$axios->getAsync('planificaciones'),
            'responsable'=>$axios->getAsync('responsables'),
            'materiales'=>$axios->getAsync('materiales'),
            'talentohumano'=>$axios->getAsync('talentohumano'),
        ];

        $results = PromiseUtils::all($promises)->wait();

        $planificacionesData = $results['planificaciones']->getBody()->getContents();
        $responsablesData = $results['responsables']->getBody()->getContents();
        $materialesData = $results['materiales']->getBody()->getContents();
        $talentohumanoData = $results['talentohumano']->getBody()->getContents();

        return view('pm_planificacion.create', compact('planificacionesData',
                                                        'responsablesData',
                                                        'materialesData',
                                                        'talentohumanoData',)); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
