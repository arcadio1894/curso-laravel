<?php

use Illuminate\Database\Seeder;
use App\FilmState;

class FilmStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FilmState::create([
            'film_id' => 1,
            'state_id' => 1
        ]);

        FilmState::create([
            'film_id' => 1,
            'state_id' => 2
        ]);

        FilmState::create([
            'film_id' => 1,
            'state_id' => 3
        ]);

        FilmState::create([
            'film_id' => 2,
            'state_id' => 1
        ]);

        FilmState::create([
            'film_id' => 2,
            'state_id' => 2
        ]);
    }
}
