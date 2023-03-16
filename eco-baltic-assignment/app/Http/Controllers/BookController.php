<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::latest()->filter(request(['genre', 'search']));

        if (request('order') ?? false) {
            $books->withCount(['sales' => function($query) {
                $query->whereMonth('created_at', '=', Carbon::now()->month);
            }])
                ->orderBy('sales_count', request('order'));
        }

        return view('books/index', [
            'books' => $books->paginate(12)
        ]);
    }

    public function show(Book $book) {
        return view('books/show', [
            'book' => $book
        ]);
    }

    public function showTopCurrentMonth($count = null) {
        $books = Book::latest()->withCount(['sales' => function($query) {
            $query->whereMonth('created_at', '=', Carbon::now()->month);
        }])
            ->orderBy('sales_count', 'desc');

        if ($count) {
            return $books->get()->take($count);
        }

        return $books->get();
    }
}
