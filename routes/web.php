<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TaskController;

// Alamat untuk melihat daftar (READ)
Route::get('/todo', [TaskController::class, 'index']);

// Alamat untuk menghapus (DELETE)
Route::delete('/todo/{id}', [TaskController::class, 'destroy'])->name('task.delete');