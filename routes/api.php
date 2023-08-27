<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UsersController;
use App\Models\User;
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

Route::middleware('auth:sanctum')->group(function()  {

    Route::post('logout',[ AuthController::class,'logout']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

  Route::get('/users', [UsersController::class,'index']);
  Route::delete('/user/{user}', [UsersController::class,'delete']);

    
});


Route::post('login',[ AuthController::class,'login']);
Route::post('register',[ AuthController::class,'register']);

