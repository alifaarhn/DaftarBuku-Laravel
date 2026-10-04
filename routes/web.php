<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController2;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController2::class);
