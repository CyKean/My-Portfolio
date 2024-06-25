<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('hello');
});

Route::get('/', [UserController::class, 'about'])->name('hello');
Route::get('/resume', [UserController::class, 'resume'])->name('resume');
Route::get('/myworks', [UserController::class, 'works'])->name('works');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
