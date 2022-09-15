<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\apparaatController;
Use App\Http\Controllers\onderdeelController;
Use App\Http\Controllers\uitgiftController;
Use App\Http\Controllers\innaamController;
Use App\Http\Controllers\rapportController;
Use App\Http\Controllers\onderhoudController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(apparaatController::class)->group(function(){
    Route::get('apparaat','index');
    Route::get('apparaat/{id}','show');
    Route::delete('apparaat/{id}','delete');
    Route::put('apparaat/{id}','update');
    Route::post('apparaat','store');
});

Route::controller(onderdeelController::class)->group(function(){
    Route::get('onderdeel','index');
    Route::get('onderdeel/{id}','show');
    Route::delete('onderdeel/{id}','delete');
    Route::put('onderdeel/{id}','update');
    Route::post('onderdeel','store');
});

Route::controller(uitgiftController::class)->group(function(){
    Route::get('uitgift','index');
    Route::get('uitgift/{id}','show');
    Route::delete('uitgift/{id}','delete');
    Route::put('uitgift/{id}','update');
    Route::post('uitgift','store');
});

Route::controller(innaamController::class)->group(function(){
    Route::get('innaam','index');
    Route::get('innaam/{id}','show');
    Route::delete('innaam/{id}','delete');
    Route::put('innaam/{id}','update');
    Route::post('innaam','store');
});

Route::controller(rapportController::class)->group(function(){
    Route::get('rapport','index');
    Route::get('rapport/{id}','show');
    Route::delete('rapport/{id}','delete');
    Route::put('rapport/{id}','update');
    Route::post('rapport','store');
});

Route::controller(onderhoudController::class)->group(function(){
    Route::get('onderhoud','index');
    Route::get('onderhoud/{id}','show');
    Route::delete('onderhoud/{id}','delete');
    Route::put('onderhoud/{id}','update');
    Route::post('onderhoud','store');
});
