<?php

namespace App\Http\Controllers;

use App\Models\MstPublisher;
use Illuminate\Http\Request;

class MstPublisherController extends Controller
{
    public function index()
    {
        return MstPublisher::all();
    }

    public function show(MstPublisher $publisher)
    {
        return $publisher;
    }

    public function store(Request $request)
    {
        $publisher = MstPublisher::create($request->all());

        return response()->json($publisher, 201);
    }

    public function update(Request $request, MstPublisher $publisher)
    {
        $publisher->update($request->all());

        return response()->json($publisher, 200);
    }

    public function delete(MstPublisher $publisher)
    {
        $publisher->delete();

        return response()->json(null, 204);
    }
}
