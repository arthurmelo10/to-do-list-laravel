<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomeDraft');
});

/**
 * Necessidade de rotas para login
 */

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');

/**
 * CRUD
 */
Route::get('/find', [Controller::class, 'find'])->name('find');
/**
 * Alterar método HTTP para POST
 */
Route::post('/create', [Controller::class, 'create'])->name('create');
/**
 * Alterar método HTTP para PUT
 */
Route::put('/edit', [Controller::class, 'update'])->name('update');
/**
 * Alterar método HTTP para DELETE */
Route::delete('/delete', [Controller::class, 'delete'])->name('delete');
