<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Redirect root URL to /tasks
Route::redirect('/', '/tasks');

// Resource route for tasks
Route::resource('tasks', TaskController::class);
