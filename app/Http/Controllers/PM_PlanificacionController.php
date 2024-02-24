<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils as PromiseUtils;
use Illuminate\Http\Request;
//importar otras clases a las cuales se les va a hacer peticiones GET - POST
use App\Models\Actividad;
use App\Models\Tarea;
use App\Models\Material;
use App\Models\Personal;


class PM_PlanificacionController extends Controller
{
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

    public function create()
    {
        // $url  = 'http://localhost:8000/web/';
        // $axios = new Client(['uri' =>$url]);

        // $promises = [
        //     'planificaciones'=>$axios->getAsync('planificaciones'),
        //     'responsable'=>$axios->getAsync('responsables'),
        //     'materiales'=>$axios->getAsync('materiales'),
        //     'talentohumano'=>$axios->getAsync('talentohumano'),
        // ];

        // $results = PromiseUtils::all($promises)->wait();

        // $planificacionesData = $results['planificaciones']->getBody()->getContents();
        // $responsablesData = $results['responsables']->getBody()->getContents();
        // $materialesData = $results['materiales']->getBody()->getContents();
        // $talentohumanoData = $results['talentohumano']->getBody()->getContents();

        // return view('pm_planificacion.create', compact('planificacionesData',
        //                                                 'responsablesData',
        //                                                 'materialesData',
        //                                                 'talentohumanoData',)); 
    }

    public function store(Request $request)
    {
        
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
