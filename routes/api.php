<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Controllers\TodoController;
use App\Http\Controllers\TodoController;

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

// set access origin 
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization'); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::apiResource('todo', TodoController::class);

// Route::get('todos', 'TodoController@index');
// Route::post('todo', 'TodoController@store');

// Route::prefix('api/v1')->group(function() {
// });

// Route::controller(TodoController::class)->group(function () {
//     Route::get('/todo', 'show');
// });
// Route::post('/todos', 'store');

Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);
Route::delete('/todo/{id}', [TodoController::class, 'destroy']);
