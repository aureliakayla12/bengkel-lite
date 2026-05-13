<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\ServisController;

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

Route::get('/', function () {
    return view('welcome');
});

// Master Data

// Form Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

// Form Motor
Route::get('/motor', [MotorController::class, 'index'])->name('motor.index');
Route::get('/motor/create', [MotorController::class, 'create'])->name('motor.create');
Route::post('/motor', [MotorController::class, 'store'])->name('motor.store');
Route::get('/motor/{id}/edit', [MotorController::class, 'edit'])->name('motor.edit');
Route::put('/motor/{id}', [MotorController::class, 'update'])->name('motor.update');
Route::delete('/motor/{id}', [MotorController::class, 'destroy'])->name('motor.destroy');

// Form Mekanik
Route::get('/mekanik', [MekanikController::class, 'index'])->name('mekanik.index');
Route::get('/mekanik/create', [MekanikController::class, 'create'])->name('mekanik.create');
Route::post('/mekanik', [MekanikController::class, 'store'])->name('mekanik.store');
Route::get('/mekanik/{id}/edit', [MekanikController::class, 'edit'])->name('mekanik.edit');
Route::put('/mekanik/{id}', [MekanikController::class, 'update'])->name('mekanik.update');
Route::delete('/mekanik/{id}', [MekanikController::class, 'destroy'])->name('mekanik.destroy');

// Form Sparepart
Route::get('/sparepart', [SparepartController::class, 'index'])->name('sparepart.index');
Route::get('/sparepart/create', [SparepartController::class, 'create'])->name('sparepart.create');
Route::post('/sparepart', [SparepartController::class, 'store'])->name('sparepart.store');
Route::get('/sparepart/{id}/edit', [SparepartController::class, 'edit'])->name('sparepart.edit');
Route::put('/sparepart/{id}', [SparepartController::class, 'update'])->name('sparepart.update');
Route::delete('/sparepart/{id}', [SparepartController::class, 'destroy'])->name('sparepart.destroy');

// Form Servis
Route::get('/servis', [ServisController::class, 'index'])->name('servis.index');
Route::get('/servis/create', [ServisController::class, 'create'])->name('servis.create');
Route::post('/servis', [ServisController::class, 'store'])->name('servis.store');
Route::get('/servis/{id}/edit', [ServisController::class, 'edit'])->name('servis.edit');
Route::put('/servis/{id}', [ServisController::class, 'update'])->name('servis.update');
Route::delete('/servis/{id}', [ServisController::class, 'destroy'])->name('servis.destroy');
