<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'name' => 'Featured', // 1
        ]);
        State::create([
            'name' => 'Top Viewed', // 2
        ]);
        State::create([
            'name' => 'Top Rating', // 3
        ]);
        State::create([
            'name' => 'Recently Added', // 4
        ]);
        State::create([
            'name' => 'Most Popular', // 5
        ]);
        State::create([
            'name' => 'Coming Soon', // 6
        ]);
        State::create([
            'name' => 'Up Next', // 7
        ]);
        State::create([
            'name' => 'Slide Small', // 8
        ]);
    }
}
