<?php

use App\Http\Controllers\PeriodController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect('/admin');
});

Route::prefix('admin')->group(function () {
  Route::get('/', function () {
    return view('adm-starter');
  })->name('admin.home');
  Route::prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('adm-student.index');
    Route::get('/add', [StudentController::class, 'create'])->name('adm-student.create');
    Route::post('/add', [StudentController::class, 'store'])->name('adm-student.store');
    Route::get('/{student}', [StudentController::class, 'show'])->name('adm-student.show');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('adm-student.edit');
    Route::put('/{student}/edit', [StudentController::class, 'update'])->name('adm-student.update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('adm-student.destroy');
  });
  Route::prefix('period')->group(function () {
    Route::get('/', [PeriodController::class, 'index'])->name('adm-period.index');
    Route::get('/add', [PeriodController::class, 'create'])->name('adm-period.create');
    Route::post('/add', [PeriodController::class, 'store'])->name('adm-period.store');
    Route::get('/{period}/edit', [PeriodController::class, 'edit'])->name('adm-period.edit');
    Route::put('/{period}/edit', [PeriodController::class, 'update'])->name('adm-period.update');
    Route::delete('/{period}', [PeriodController::class, 'destroy'])->name('adm-period.destroy');
  });
  Route::prefix('student_class')->group(function () {
    Route::get('/filter', [StudentClassController::class, 'filter'])->name('adm-sclass.filter');
    Route::get('/add', [StudentClassController::class, 'create'])->name('adm-sclass.create');
    Route::post('/add', [StudentClassController::class, 'store'])->name('adm-sclass.store');
    Route::get('/{periodId?}', [StudentClassController::class, 'index'])->name('adm-sclass.index');
    Route::delete('/{studentId}/{periodId}/{class}', [StudentClassController::class, 'destroy'])->name('adm-sclass.destroy');
  });
});
