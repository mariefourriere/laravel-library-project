<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class genreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new \App\Models\Genre();
        $genre->name = 'Romance';
        $genre->save();
    
        $genre = new \App\Models\Genre();
        $genre->name = 'Fiction';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Classics';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'History';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Documentaries';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'other';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Philosophie';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Children';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Thrillers';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Horror';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Mystery and Detective';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Crime';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Drama';
        $genre->save();

        $genre = new \App\Models\Genre();
        $genre->name = 'Autobiographies and Biographies';
        $genre->save();
    }
}
