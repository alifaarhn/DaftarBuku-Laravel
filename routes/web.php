<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController2;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController2::class);

Route::get('/books/isbn/{isbn}', function (string $isbn) {
    $book = \App\Models\Book::where('isbn', $isbn)->firstOrFail();

    return "ISBN: {$book->isbn}<br>Judul: {$book->title}";
});