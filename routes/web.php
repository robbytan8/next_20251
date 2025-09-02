<?php

use App\Http\Controllers\PeriodController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});
Route::get('/home', function () {
  return view('index');
})->name('my-home');
Route::get('/store', function () {
  return view('store');
})->name('my-store');

Route::prefix('admin')->group(function () {
  Route::get('/', function () {
    return view('adm-starter');
  })->name('admin.home');
  Route::prefix('student')->group(function () {
    Route::get('/add', [StudentController::class, 'create'])->name('adm-student.create');
    Route::post('/add', [StudentController::class, 'store'])->name('adm-student.store');
    Route::get('/', [StudentController::class, 'index'])->name('adm-student.index');
  });
  Route::prefix('period')->group(function () {
    Route::get('/add', [PeriodController::class, 'create'])->name('adm-period.create');
    Route::post('/add', [PeriodController::class, 'store'])->name('adm-period.store');
    Route::get('/', [PeriodController::class, 'index'])->name('adm-period.index');
  });
  Route::prefix('student_class')->group(function () {
    Route::get('/filter', [StudentClassController::class, 'filter'])->name('adm-sclass.filter');
    Route::get('/add', [StudentClassController::class, 'create'])->name('adm-sclass.create');
    Route::post('/add', [StudentClassController::class, 'store'])->name('adm-sclass.store');
    Route::get('/{periodId?}', [StudentClassController::class, 'index'])->name('adm-sclass.index');
  });
});
