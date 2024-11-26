<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ToDoController as ToDoController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

/**
 * Necessidade de rotas para login
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('postLogin');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('destroyLogin');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('postRegister');
});

/**
 * CRUD
 */
Route::get('/user/{id}/todos', [ToDoController::class, 'index'])->name('index');
Route::get('/user/{id}/todos/{toDoId}', [ToDoController::class, 'show'])->name('show');
Route::get('/user/{id}/createTodo', [TodoController::class, 'create'])->name('create');
Route::post('/user/{id}/createTodo', [TodoController::class, 'store'])->name('store');
Route::get('/user/{id}/todos/{toDoId}/edit', [TodoController::class, 'edit'])->name('edit');
Route::put('/user/{id}/todos/{toDoId}', [TodoController::class, 'update'])->name('update');
Route::delete('user/{id}/todos/{toDoId}/delete', [TodoController::class, 'destroy'])->name('destroy');
