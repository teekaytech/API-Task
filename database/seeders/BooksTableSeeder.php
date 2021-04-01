<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Removing existing books so as to start from scratch
        Book::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 10; $i++) {
            Book::create([
                'title' => $faker->word,
                'author' => $faker->name,
                'pages' => $faker->numberBetween(100, 150),
            ]);
        }
    }
}
