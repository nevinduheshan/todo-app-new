<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::redirect('/', '/tasks');
Route::resource('tasks', TaskController::class);
