<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/{id}', [TodoController::class, 'completed'])->name('todo.completed');