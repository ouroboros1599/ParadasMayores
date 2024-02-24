<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    public function index()
    {
        $personals = Personal::all();
        return response()->json($personals, 200);
    }

    public function store(Request $request)
    {
        $personals = Personal::create($request->all());
        return response()->json($personals, 201);
    }

    public function show($id)
    {
        $personals = Personal::findOrFail($id);
        return response()->json($personals, 200);
    }

    public function update(Request $request, $id)
    {
        $personals = Personal::findOrFail($id);
        $personals->update($request->all());
        return response()->json($personals, 200);
    }

    public function destroy($id)
    {
        $personals = Personal::findOrFail($id);
        $personals->delete();
        return response()->json(null, 204);
    }
}
