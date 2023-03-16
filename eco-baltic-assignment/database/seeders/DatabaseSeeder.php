<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Book::factory()->count(40)->create();
        Author::factory(10)->has(Book::factory()->count(4))->create();

        // Fake data for this month
        Sale::factory(200)->create([
            'created_at' => Carbon::now()->startOfMonth()
        ])->each(function ($sale) {
            $sale->created_at = $sale->created_at->addMinutes(rand(1,1440 * 30));
        });

        // Fake data for previous month
        Sale::factory(200)->create([
            'created_at' => Carbon::now()->subMonth()->startOfMonth()
        ])->each(function ($sale) {
            $sale->created_at = $sale->created_at->addMinutes(rand(1,1440 * 30));
        });
    }
}
