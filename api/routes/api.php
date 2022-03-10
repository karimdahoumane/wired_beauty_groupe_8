<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::post('/subscribe-newsletter', \App\Http\Controllers\NewsletterController::class);

Route::post('/upload-excel', \App\Http\Controllers\UploadController::class);

Route::get('/graph-test', \App\Http\Controllers\GraphController::class);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
