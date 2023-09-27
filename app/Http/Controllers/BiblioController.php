<?php

namespace App\Http\Controllers;

use App\Models\Biblio;
use Illuminate\Http\Request;

class BiblioController extends Controller
{
    public function index()
    {
        return Biblio::all();
    }

    public function show(Biblio $biblio)
    {
        return $biblio;
    }

    public function store(Request $request)
    {
        $biblio = Biblio::create($request->all());

        return response()->json($biblio, 201);
    }

    public function update(Request $request, Biblio $biblio)
    {
        $biblio->update($request->all());

        return response()->json($biblio, 200);
    }

    public function delete(Biblio $biblio)
    {
        $biblio->delete();

        return response()->json(null, 204);
    }
}
