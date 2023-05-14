<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HardwareController;

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