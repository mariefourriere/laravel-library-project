<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class bookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new \App\Book([
            'title' => 'Central Park',
            'author_id' => '1',
            'genre' => 'Romance'
        ]);
        $book->save();

        $book = new \App\Book([
            'title' => 'Fictions',
            'author_id' => '4',
            'genre' => 'Fiction'
        ]);
        $book->save();

        $book = new \App\Book([
            'title' => 'The Stand',
            'author_id' => '5',
            'genre' => 'Fiction'
        ]);
        $book->save();

        $book = new \App\Book([
            'title' => 'Et si c\'etait vrai',
            'author_id' => '3',
            'genre' => 'Romance'
        ]);
        $book->save();

        $book = new \App\Book([
            'title' => 'Le Petit Prince',
            'author_id' => '2',
            'genre' => 'Philosophie'
        ]);
        $book->save();

    }
}
