<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PPDBController;





Route::get('/', function () {
    return view('user.home');
});
Route::get('/tentangkami', function () {
    return view('user.aboutUs');
});

// ADMIN
Route::get('/admin', function () {
    return view('admin.home');
})->middleware('auth');

Route::get('/admin/PPDB', [PPDBController::class, 'index'])->name('ppdb.index');
Route::get('/admin/ppdb/{id}/edit', [PPDBController::class, 'edit'])->name('ppdb.edit');
Route::delete('/admin/ppdb/{id}', [PPDBController::class, 'destroy'])->name('ppdb.destroy');
Route::put('/admin/PPDB/{id}', [PPDBController::class, 'update'])->name('ppdb.update');


// PPDB
Route::get('/PPDB', function () {
    return view('user.ppdb');
});

Route::get('/Acara', function () {
    return view('user.acara');
});

Route::get('/Galeri', function () {
    return view('user.galeri');
});

Route::post('/submit-ppdb', function (Request $request) {
    // Simpan data ke database (contoh)
    \App\Models\Ppdb::create($request->all());

    return back()->with('success', 'Pendaftaran berhasil disimpan!');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/students', [StudentController::class, 'store']);
Route::post('/teachers', [TeacherController::class, 'store']);
Route::post('/activities', [ActivityController::class, 'store']);
Route::post('/events', [EventController::class, 'store']);


Route::get('/register', [StudentController::class, 'create'])->name('register');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
