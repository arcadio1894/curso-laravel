<?php

use Illuminate\Database\Seeder;
use App\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::create([
            'name' => 'Stars Wars',
            'duration' => 180,
            'description' => 'Pelicula de ciencia ficcion de guerras intergalacticas',
            'year' => 2019,
            'url'=>'',
            'category_id' => 3
        ]);
    }
}
