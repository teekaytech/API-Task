<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;



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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'auth:sanctum'], function (){
    Route::post('books', [BookController::class, 'store']);
    Route::delete('books/{book}', [BookController::class, 'delete']);
});

Route::post('register', [UserController::class, 'store']);
Route::post('login', [UserController::class, 'index']);


Route::get('books', [BookController::class, 'index']);
Route::get('books/{book}', [BookController::class, 'show']);

