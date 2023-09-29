<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('search', [App\Http\Controllers\SearchEncuestaController::class, 'search']);
Route::post('login', [App\Http\Controllers\UserController::class, 'login']);
Route::post('upload/{type}/{id}', [\App\Http\Controllers\UploadController::class,'upload']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('me', [App\Http\Controllers\UserController::class, 'me']);
    Route::post('logout', [App\Http\Controllers\UserController::class, 'logout']);
    Route::post('cambioEstado', [App\Http\Controllers\UserController::class, 'cambioEstado']);
    Route::apiResource('user', App\Http\Controllers\UserController::class);
    Route::put('/updatePassword/{user}',[\App\Http\Controllers\UserController::class,'updatePassword']);
    Route::put('/updatepermisos/{user}',[\App\Http\Controllers\UserController::class,'updatepermisos']);
    Route::resource('/permiso',\App\Http\Controllers\PermisoController::class);

    Route::resource('/docente', App\Http\Controllers\DocenteController::class);
    Route::resource('/materia', App\Http\Controllers\MateriaController::class);
    Route::resource('/docentemateria', App\Http\Controllers\DocenteMateriaController::class);


});
