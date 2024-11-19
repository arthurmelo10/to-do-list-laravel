<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToDoController as ToDoController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    //return view('welcomeDraft');
    return Inertia::render('Home');
});

/**
 * Necessidade de rotas para login
 */

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');

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
