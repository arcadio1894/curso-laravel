<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Terror',
            'description' => 'Genero de terror'
        ]);
        Category::create([
            'name' => 'Comedia',
            'description' => 'Genero de comedia'
        ]);
        Category::create([
            'name' => 'Ciencia Ficcion',
            'description' => 'Genero de ciencia Ficcion'
        ]);
    }
}
