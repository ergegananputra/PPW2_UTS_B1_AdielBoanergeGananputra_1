<?php

use App\Http\Controllers\PemainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/pemain', [PemainController::class, 'index']);

Route::get('/pemain/create', [PemainController::class, 'create'])->name('pemain.create');
Route::post('/pemain', [PemainController::class, 'store'])->name('pemain.store');
