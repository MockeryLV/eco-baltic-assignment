<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public static function find($id) {
        $books = self::all();

        foreach ($books as $book) {
            if($book['id'] == $id) {
                return $book;
            }
        }
    }

    public function authors() {
        return $this->belongsToMany(Author::class);
    }

    public function sales() {
        return $this->hasMany(Sale::class);
    }
}
