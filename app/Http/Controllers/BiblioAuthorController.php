<?php

namespace App\Http\Controllers;

use App\Models\BiblioAuthor;
use Illuminate\Http\Request;

class BiblioAuthorController extends Controller
{
    public function index()
    {
        return BiblioAuthor::all();
    }

    public function show(string $biblio, string $author)
    {
        return BiblioAuthor::where('biblio_id', '=', $biblio)->where('author_id', '=', $author)->get();
    }

    public function store(Request $request)
    {
        $biblioAuthor = BiblioAuthor::create($request->all());

        return response()->json($biblioAuthor, 201);
    }

    public function update(Request $request, BiblioAuthor $biblioAuthor)
    {
        $biblioAuthor->update($request->all());

        return response()->json($biblioAuthor, 200);
    }

    public function delete(BiblioAuthor $biblioAuthor)
    {
        $biblioAuthor->delete();

        return response()->json(null, 204);
    }
}
