<?php

use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    return Book::all();
});

Route::get('/authors', function () {
    return Author::all();
});

Route::get('/books/{book}', function ($id) {
    return view('book', [
        'book' => Book::find($id)
    ]);
});
