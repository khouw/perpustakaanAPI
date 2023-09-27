<?php

namespace App\Http\Controllers;

use App\Models\MstPlace;
use Illuminate\Http\Request;

class MstPlaceController extends Controller
{
    public function index()
    {
        return MstPlace::all();
    }

    public function show(MstPlace $place)
    {
        return $place;
    }

    public function store(Request $request)
    {
        $place = MstPlace::create($request->all());

        return response()->json($place, 201);
    }

    public function update(Request $request, MstPlace $place)
    {
        $place->update($request->all());

        return response()->json($place, 200);
    }

    public function delete(MstPlace $place)
    {
        $place->delete();

        return response()->json(null, 204);
    }
}
