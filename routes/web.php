<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HardwareController::class, 'index']);
Route::get('/hardware', [HardwareController::class, 'index']);
Route::get('/hardware/create', [HardwareController::class, 'create']);
Route::post('/hardware', [HardwareController::class, 'store']);
Route::get('/hardware/{hardware}/edit', [HardwareController::class, 'edit'])->where('hardware', '[0-9]+');
Route::get('/hardware/{hardware}', [HardwareController::class, 'show'])->where('hardware', '[0-9]+');
Route::put('/hardware/{hardware}', [HardwareController::class, 'update'])->where('hardware', '[0-9]+');
Route::delete('/hardware/{hardware}', [HardwareController::class, 'destroy'])->where('hardware', '[0-9]+');

Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user/login', [UserController::class, 'login']);
Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{user}', [UserController::class, 'show'])->where('user', '[0-9]+');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();