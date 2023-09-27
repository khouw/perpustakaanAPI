<?php

namespace App\Http\Controllers;

use App\Models\MstAuthor;
use Illuminate\Http\Request;

class MstAuthorController extends Controller
{
    //
    public function index()
    {
        return MstAuthor::all();
    }

    public function show(MstAuthor $author)
    {
        return $author;
    }

    public function store(Request $request)
    {
        $author = MstAuthor::create($request->all());

        return response()->json($author, 201);
    }

    public function update(Request $request, MstAuthor $author)
    {
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete(MstAuthor $author)
    {
        $author->delete();

        return response()->json(null, 204);
    }
}
