<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\MajorController;
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
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    //Halaman Hapus Siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

// Manajemen Data Teacher (Action Controller)
Route::name('teachers.')->prefix('teachers')->group(function () {
    //Halaman Daftar Teacher
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    //Halaman Detail Teacher
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    //Halaman Tambah Teacher
    Route::get('/create', [TeacherController::class, 'create'])->name('create');

    //Halaman Edit Teacher
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

    //Halaman Tambah Teacher
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    //Halaman Edit Teacher
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');

    //Halaman Hapus Teacher
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

Route ::name('school-classes.')->prefix('school-classes')->group(function () {
    //Halaman Daftar Kelas
    Route::get('/', IndexController::class)->name('index');

    //Halaman Detail Kelas
    Route::get('/{id}', ShowController::class)->name('show');

    //Halaman Tambah Kelas
    Route::get('/create', CreateController::class)->name('create');

    //Halaman Edit Kelas
    Route::get('/{id}/edit', EditController::class)->name('edit');

    //Halaman Tambah Kelas
    Route::post('/', StoreController::class)->name('store');

    //Halaman Edit Kelas
    Route::put('/{id}', UpdateController::class)->name('update');

    //Halaman Hapus Kelas
    Route::delete('/{id}', DestroyController::class)->name('destroy');
});

Route::resource('majors', MajorController::class);
