<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
route::get('/siswa/{id}/show', [SiswaController::class, 'show'])->name('siswa.show');