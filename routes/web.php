<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomeDraft');
});

/**
 * Necessidade de rotas para login
 */

/**
 * CRUD
 */
Route::get('/find', [Controller::class, 'find'])->name('find');
/**
 * Alterar método HTTP para POST
 */
Route::get('/create', [Controller::class, 'create'])->name('create');
/**
 * Alterar método HTTP para PUT
 */
Route::get('/edit', [Controller::class, 'update'])->name('update');
/**
 * Alterar método HTTP para DELETE */
Route::get('/delete', [Controller::class, 'delete'])->name('delete');
