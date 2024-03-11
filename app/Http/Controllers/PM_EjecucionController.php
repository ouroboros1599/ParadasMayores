<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PM_EjecucionController extends Controller
{
    public function index()
    {
        return view('pm_ejecucion.index');
    }

    public function create()
    {
        return view('pm_ejecucion.create');
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        return view('pm_ejecucion.edit');
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
