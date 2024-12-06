<?php

// routes/web.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('user.home');
});
Route::get('/tentangkami', function () {
    return view('user.aboutUs');
});

// PPDB
Route::get('/PPDB', function () {
    return view('user.ppdb');
});

Route::get('/Acara', function () {
    return view('user.acara');
});

Route::post('/submit-ppdb', function (Request $request) {
    // Simpan data ke database (contoh)
    \App\Models\Ppdb::create($request->all());

    return back()->with('success', 'Pendaftaran berhasil disimpan!');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/activities', [ActivityController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);

Route::post('/students', [StudentController::class, 'store']);
Route::post('/teachers', [TeacherController::class, 'store']);
Route::post('/activities', [ActivityController::class, 'store']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/register', [StudentController::class, 'create'])->name('register');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
