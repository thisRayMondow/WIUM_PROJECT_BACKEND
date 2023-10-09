<?php

use App\Http\Controllers\WIUM_PROJECT_DASHBOARD_controller;
use App\Http\Controllers\WIUM_PROJECT_LOGIN_Controller;
use App\Http\Controllers\WIUM_PROJECT_DEPT_Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WIUM_PROJECT_FRONTEND\FRONTEND_LOGIN_Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->to('http://localhost:3000/');
});

Route::get('log-in', [WIUM_PROJECT_LOGIN_Controller::class, "LOGIN"])->name('login');
Route::post('log-in', [WIUM_PROJECT_LOGIN_Controller::class, "credential"])->name("login-Credential");
Route::get('log-out', [WIUM_PROJECT_LOGIN_Controller::class, "LOGOUT"])->name("logout");

Route::get("dashboard", [WIUM_PROJECT_DASHBOARD_controller::class, "index"])->name('dashboard');
Route::post('WIUM_DEPT', [WIUM_PROJECT_DEPT_Controller::class, 'ADD']);


