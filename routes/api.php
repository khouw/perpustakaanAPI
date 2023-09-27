<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BiblioAuthorController;
use App\Http\Controllers\BiblioController;
use App\Http\Controllers\MstAuthorController;
use App\Http\Controllers\MstPlaceController;
use App\Http\Controllers\MstPublisherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Route::get('articles', [ArticleController::class, 'index']);
// Route::get('articles/{article}', [ArticleController::class, 'show']);
// Route::post('articles', [ArticleController::class, 'store']);
// Route::put('articles/{article}', [ArticleController::class, 'update']);
// Route::delete('articles/{article}', [ArticleController::class, 'delete']);

// mst_author
Route::get('authors', [MstAuthorController::class, 'index']);
Route::get('authors/{author}', [MstAuthorController::class, 'show']);
Route::post('authors', [MstAuthorController::class, 'store']);
Route::put('authors/{author}', [MstAuthorController::class, 'update']);
Route::delete('authors/{author}', [MstAuthorController::class, 'delete']);


// mst_publisher
Route::get('publishers', [MstPublisherController::class, 'index']);
Route::get('publishers/{publisher}', [MstPublisherController::class, 'show']);
Route::post('publishers', [MstPublisherController::class, 'store']);
Route::put('publishers/{publisher}', [MstPublisherController::class, 'update']);
Route::delete('publishers/{publisher}', [MstPublisherController::class, 'delete']);

// mst_place
Route::get('places', [MstPlaceController::class, 'index']);
Route::get('places/{place}', [MstPlaceController::class, 'show']);
Route::post('places', [MstPlaceController::class, 'store']);
Route::put('places/{place}', [MstPlaceController::class, 'update']);
Route::delete('places/{place}', [MstPlaceController::class, 'delete']);

// biblio
Route::get('biblios', [BiblioController::class, 'index']);
Route::get('biblios/{biblio}', [BiblioController::class, 'show']);
Route::post('biblios', [BiblioController::class, 'store']);
Route::put('biblios/{biblio}', [BiblioController::class, 'update']);
Route::delete('biblios/{biblio}', [BiblioController::class, 'delete']);

// biblio_author
Route::get('biblio_authors', [BiblioAuthorController::class, 'index']);
//Route::get('biblio_authors/{biblio_author}', [BiblioAuthorController::class, 'show']);
Route::get('biblio_authors/{biblio}/{author}', [BiblioAuthorController::class, 'show']);
Route::post('biblio_authors', [BiblioAuthorController::class, 'store']);
Route::put('biblio_authors/{biblio_author}', [BiblioAuthorController::class, 'update']);
Route::delete('biblio_authors/{biblio_author}', [BiblioAuthorController::class, 'delete']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
