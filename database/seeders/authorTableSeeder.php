<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class authorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new \App\Models\Author([
            'first_name' => 'Guillaume',
            'last_name' => 'Musso',
            'gender' => 'M'
        ]);
        $author->save();

        $author = new \App\Models\Author([
            'first_name' => 'Antoine',
            'last_name' => 'de Saint-Exupery',
            'gender' => 'M'
        ]);
        $author->save();

        $author = new \App\Models\Author([
            'first_name' => 'Marc',
            'last_name' => 'Levy',
            'gender' => 'M'
        ]);
        $author->save();

        $author = new \App\Models\Author([
            'first_name' => 'Jorge Luis',
            'last_name' => 'Borges',
            'gender' => 'M'
        ]);
        $author->save();

        $author = new \App\Models\Author([
            'first_name' => 'Stephen',
            'last_name' => 'King',
            'gender' => 'M'
            
        ]);
        $author->save();
        
    }
}
