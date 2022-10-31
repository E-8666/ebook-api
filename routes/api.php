<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

/*
*task
*url : http://127.0.0.1:8000/api/halo
*method: get
*exec: function
*return: json => {"me": "ganteng"}
*/

//Route::get('halo', function(){
//    $data = ["me" => "guteng"];
//    return $data;
//});

Route::resource('helocontroller', HeloController::class);

Route::resource('siswa', SiswaController::class);
Route::resource('books', BookController::class);