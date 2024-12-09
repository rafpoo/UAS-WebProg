<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PPDBController;



Route::get('/profil-guru', function () {
    return view('user.guru');
})->name('profil-guru');

Route::get('/', function () {
    return view('user.home');
});
Route::get('/tentangkami', function () {
    return view('user.aboutUs');
});

// ADMIN
Route::prefix('admin') // Menambahkan prefix 'admin' pada setiap URL route
    ->middleware(['auth', 'verified']) // Menambahkan middleware untuk semua route di grup ini
    ->group(function () {
        Route::get('/', function () {
            return view('admin.home');
        })->name('dashboard');
        
        Route::get('/tentangkami', function () {
            return view('admin.aboutUs');
        });

        Route::get('/PPDB', [PPDBController::class, 'index'])->name('ppdb.index');
        Route::get('/ppdb/{id}/edit', [PPDBController::class, 'edit'])->name('ppdb.edit');
        Route::delete('/ppdb/{id}', [PPDBController::class, 'destroy'])->name('ppdb.destroy');
        Route::put('/PPDB/{id}', [PPDBController::class, 'update'])->name('ppdb.update');
        Route::get('/acara', [EventController::class, 'indexAdmin'])->name('admin.acara.index');
        Route::put('/acara/update/{id}', [EventController::class, 'update'])->name('admin.acara.update');
        Route::get('/acara/create', [EventController::class, 'create'])->name('admin.acara.create');
        Route::post('/acara/store', [EventController::class, 'store'])->name('admin.acara.store');
        Route::get('/acara/{id}/edit', [EventController::class, 'edit'])->name('admin.acara.edit');
        Route::delete('/acara/{id}', [EventController::class, 'destroy'])->name('admin.acara.destroy');
        Route::get('/guru', [TeacherController::class, 'indexAdmin'])->name('admin.guru.index');
        Route::get('/guru/create', [TeacherController::class, 'create'])->name('admin.guru.create');
        Route::post('/guru/store', [TeacherController::class, 'store'])->name('admin.guru.store');
        Route::get('/guru/{id}/edit', [TeacherController::class, 'edit'])->name('admin.guru.edit');
        Route::delete('/guru/{id}', [TeacherController::class, 'destroy'])->name('admin.guru.destroy');
        Route::put('/guru/update/{id}', [TeacherController::class, 'update'])->name('admin.guru.update');
        Route::delete('/guru/{id}/photo', [TeacherController::class, 'destroyPhoto'])->name('admin.guru.photo.destroy');
        
    });



// PPDB
Route::get('/PPDB', function () {
    return view('user.ppdb');
});

// ACARA

Route::get('/acara', [EventController::class, 'index'])->name('user.acara.index');

// Route::get('/Acara', function () {
//     return view('user.acara');
// });

Route::get('/Galeri', function () {
    return view('user.galeri');
});

Route::get('/guru', [TeacherController::class, 'index'])->name('user.acara.index');

// Route::get('/guru', function () {
//     return view('user.guru');
// });

Route::post('/submit-ppdb', [PpdbController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::post('/students', [StudentController::class, 'store']);
// Route::post('/teachers', [TeacherController::class, 'store']);
// Route::post('/activities', [ActivityController::class, 'store']);
// Route::post('/events', [EventController::class, 'store']);


// Route::get('/register', [StudentController::class, 'create'])->name('register');
// Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
// Route::get('/events', [EventController::class, 'index'])->name('events.index');
// Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
