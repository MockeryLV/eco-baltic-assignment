<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function store(Request $request) {
        $formFields = $request->validate([
            'book_id' => 'required'
        ]);

        Sale::create($formFields);

        return redirect('/');
    }
}
