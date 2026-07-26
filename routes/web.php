<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Manajemen Data Siswa (Action Controller)
Route::name('students.')->prefix('students')->group(function () {
    //Halaman Daftar Siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

    //Halaman Detail Siswa
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    //Halaman Tambah Siswa
    Route::get('/create', [StudentController::class, 'create'])->name('create');

    //Halaman Edit Siswa
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    //Halaman Tambah Siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    //Halaman Edit Siswa
    route::put('/{id}', [StudentController::class, 'update'])->name('update');

    //Halaman Hapus Siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

