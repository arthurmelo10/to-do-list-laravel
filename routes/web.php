<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ToDoController;
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
Route::get('/user/{id}/todos/{toDoId}', [ToDoController::class, 'findById'])->name('show');
/**
 * Alterar método HTTP para POST
 */
Route::post('/store', [TodoController::class, 'store'])->name('store');
/**
 * Alterar método HTTP para PUT
 */
Route::get('/user/{id}/todos/{toDoId}/edit', [TodoController::class, 'edit'])->name('edit');
Route::put('/user/{id}/todos/{toDoId}', [TodoController::class, 'update'])->name('update');
/**
 * Alterar método HTTP para DELETE */
Route::delete('user/{id}/todos/{toDoId}', [TodoController::class, 'destroy'])->name('destroy');
