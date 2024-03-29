<?php

use Illuminate\Http\Request;

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,PUT,DELETE');
header('Access-Control-Allow-Headers:Content-Type,X-Auth-Token,Origin,Authorization');
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
Route::get('imagen', 'edicionC@index');
Route::get('imagen/{id}/{red}/', 'edicionC@compartir');
Route::get('imagen/{id}/', 'edicionC@editarVista');
Route::post('imagen/{id}', 'edicionC@editar');
Route::post('imagen', 'edicionC@store');

