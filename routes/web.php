<?php

use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcomeDraft');
//});

Route::get('/', [Controller::class, 'getFirstToDo']);
