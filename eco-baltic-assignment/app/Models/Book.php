<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function authors() {
        return $this->belongsToMany(Author::class);
    }

    public function scopeFilter($query, array $filters) {
        if($filters['genre'] ?? false) {
            $query->where('genre', 'like', request('genre'));
        }

        if($filters['search'] ?? false) {
            $query->whereHas('authors', function ($query) {
                $query->where('name', 'like', '%' . request('search') . '%');
            })
                ->orWhere('title', 'like', '%' . request('search') . '%')
                ->orWhere('genre', 'like', '%' . request('search') . '%');
        }
    }

    public function sales() {
        return $this->hasMany(Sale::class);
    }
}
