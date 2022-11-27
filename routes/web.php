<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\PerizinanController;

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


// Home
Route::get('/', [HomeController::class, 'index'])->name('/');

// Perizinan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

// Pelanggaran
Route::get('/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran');

