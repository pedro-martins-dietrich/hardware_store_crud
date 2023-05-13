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
Route::get('/hardwares', [HardwareController::class, 'index']);
Route::get('/hardwares/create', [HardwareController::class, 'create']);
Route::post('/hardwares', [HardwareController::class, 'store']);
Route::get('/hardwares/{hardware}/edit', [HardwareController::class, 'edit'])->where('hardware', '[0-9]+');
Route::get('/hardwares/{hardware}', [HardwareController::class, 'show'])->where('hardware', '[0-9]+');
Route::put('/hardwares/{hardware}', [HardwareController::class, 'update'])->where('hardware', '[0-9]+');
Route::delete('/hardwares/{hardware}', [HardwareController::class, 'destroy'])->where('hardware', '[0-9]+');