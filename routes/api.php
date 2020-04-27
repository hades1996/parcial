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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('marcas', 'marcasAPIController');

Route::resource('modelos', 'modelosAPIController');

Route::resource('servicios', 'serviciosAPIController');

Route::resource('matriculas', 'matriculasAPIController');

Route::resource('matri_servis', 'matri_serviAPIController');