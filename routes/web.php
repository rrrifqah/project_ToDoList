<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

Route::get('/', function () {
    // Nantinya teman Anda (bagian GET/READ) akan mengubah ini untuk menampilkan daftar Task.
    // Sementara, kita biarkan mengarah ke welcome page.
    return view('welcome');
});

// Route untuk fitur Create Task (Bagian Anda)
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
