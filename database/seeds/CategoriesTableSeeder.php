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
            'name' => 'Biográfico',
            'description' => 'Genero de Biography'
            // 1
        ]);
        Category::create([
            'name' => 'Crimen',
            'description' => 'Genero de Crime'
            // 2
        ]);
        Category::create([
            'name' => 'Familiar',
            'description' => 'Genero de Family'
            // 3
        ]);
        Category::create([
            'name' => 'Horror',
            'description' => 'Genero de Horror'
            // 4
        ]);
        Category::create([
            'name' => 'Romance',
            'description' => 'Genero de Romance'
            // 5
        ]);
        Category::create([
            'name' => 'Deportes',
            'description' => 'Genero de Sports'
            // 6
        ]);
        Category::create([
            'name' => 'Guerra',
            'description' => 'Genero de Guerra'
            // 7
        ]);
        Category::create([
            'name' => 'Aventura',
            'description' => 'Genero de Aventura'
            // 8
        ]);
        Category::create([
            'name' => 'Acción',
            'description' => 'Genero de Acción'
            // 9
        ]);
        Category::create([
            'name' => 'Documental',
            'description' => 'Genero de Documental'
            // 10
        ]);
        Category::create([
            'name' => 'Comedia',
            'description' => 'Genero de Comedia'
            // 11
        ]);
        Category::create([
            'name' => 'Suspenso',
            'description' => 'Genero de Suspenso'
            // 12
        ]);
        Category::create([
            'name' => 'Animación',
            'description' => 'Genero de Animación'
            // 13
        ]);
        Category::create([
            'name' => 'Navidad',
            'description' => 'Genero de Navidad'
            // 14
        ]);
        Category::create([
            'name' => 'Drama',
            'description' => 'Genero de Drama'
            // 15
        ]);
        Category::create([
            'name' => 'Musical',
            'description' => 'Genero de Musical'
            // 16
        ]);
        Category::create([
            'name' => 'Infantil',
            'description' => 'Genero de Infantil'
            // 17
        ]);
        Category::create([
            'name' => 'Psychological',
            'description' => 'Genero de Psychological'
            // 18
        ]);
        //factory(Category::class, 2)->create();
    }
}
