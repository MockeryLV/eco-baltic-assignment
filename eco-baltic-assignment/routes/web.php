<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\SaleController;
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

Route::get('/', [BookController::class, 'index']);

Route::post('/sales', [SaleController::class, 'store']);

Route::get('/books/{book}', [BookController::class, 'show']);
