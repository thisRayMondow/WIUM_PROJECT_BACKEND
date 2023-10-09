<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WIUM_PROJECT_DEPT_Controller;
use App\Http\Controllers\WIUM_PROJECT_FRONTEND\FRONTEND_LOGIN_Controller;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('WIUM_DEPT', [WIUM_PROJECT_DEPT_Controller::class, 'MAIN']);
Route::post('LOG-IN', [FRONTEND_LOGIN_Controller::class, "LOGIN"]);