<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoControllerV2;
use App\Http\Controllers\TodoControllerV3;

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

Route::resource('/v1/todo', TodoController::class);
Route::resource('/v2/todo', TodoControllerV2::class);
Route::resource('/v3/todo', TodoControllerV3::class);

/**
 * @bodyParam email string required Email do usuário
 * @bodyParam password string required Senha do usuário
 */
Route::post('/login', function (Request $request) {
    return base64_encode($request->email . $request->password);
});
