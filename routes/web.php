<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Rute otomatis untuk seluruh fitur CRUD Mahasiswa
Route::resource('student', StudentController::class);

// Mengarahkan halaman utama (/) langsung ke daftar mahasiswa
Route::get('/', [StudentController::class, 'index']);