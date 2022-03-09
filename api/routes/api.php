<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Dbfx\LaravelStrapi\LaravelStrapi;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function () {
    $strapi = new LaravelStrapi();
    return $pages = $strapi->collection('pages');
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


require __DIR__.'/auth.php';
