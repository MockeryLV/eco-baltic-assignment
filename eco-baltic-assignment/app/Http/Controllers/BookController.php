<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view('books/index', [
            'books' => Book::latest()->filter(request(['genre', 'search']))->paginate(12)
        ]);
    }

    public function show(Book $book) {
        return view('books/show', [
            'book' => $book
        ]);
    }

    public function showTopTenCurrentMonth() {
        $books = Book::with(['sales' => function($query) {
            $query->whereMonth('created_at', '=', Carbon::now()->month);
        }]);

        $sortedBooks = $books->get()->sortByDesc(function ($book) {
            return $book->sales->count();
        });

        return $sortedBooks->values()->take(10);
    }
}
