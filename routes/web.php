<?php

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
});
