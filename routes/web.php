<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerTampilan;
use App\Http\Controllers\guestsController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\Auth\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('/index/index');
// });

Route::get('/', [ControllerTampilan::class, 'home']);

Route::get('/info', [infoController::class, 'home']);

Route::get('/data', [guestsController::class, 'index']);
Route::post('/data', [guestsController::class, 'store']);
Route::get('/data/data', [guestsController::class, 'data']);
Route::get('/data/input', [guestsController::class, 'create']);
// ini harus disimpen di bawah
Route::get('/data/{guest}', [guestsController::class, 'show']);
Route::delete('/data/{guest}', [guestsController::class, 'destroy']);
Route::get('/data/{guest}/edit', [guestsController::class, 'edit']);
Route::patch('/data/{guest}', [guestsController::class, 'update']);

Route::get('/login', [loginController::class, 'homeLogin']);
Route::get('/loginCek', [loginController::class, 'homeLoginCek']);
Route::post('/login', [loginController::class, 'formLogin']);
Route::post('/loginCek', [loginController::class, 'formLoginCek']);