<?php

use Illuminate\Database\Seeder;
use App\CategoryFilm;

class CategoryFilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryFilm::create([
            'category_id' => 1,
            'film_id' => 1
        ]);
        CategoryFilm::create([
            'category_id' => 2,
            'film_id' => 1
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 1
        ]);

        CategoryFilm::create([
            'category_id' => 1,
            'film_id' => 2
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 2
        ]);

        CategoryFilm::create([
            'category_id' => 1,
            'film_id' => 3
        ]);
        CategoryFilm::create([
            'category_id' => 14,
            'film_id' => 3
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 3
        ]);

        CategoryFilm::create([
            'category_id' => 1,
            'film_id' => 4
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 4
        ]);
        CategoryFilm::create([
            'category_id' => 10,
            'film_id' => 4
        ]);
        CategoryFilm::create([
            'category_id' => 16,
            'film_id' => 4
        ]);

        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 5
        ]);
        CategoryFilm::create([
            'category_id' => 1,
            'film_id' => 5
        ]);
        CategoryFilm::create([
            'category_id' => 5,
            'film_id' => 5
        ]);

        CategoryFilm::create([
            'category_id' => 12,
            'film_id' => 6
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 6
        ]);
        CategoryFilm::create([
            'category_id' => 2,
            'film_id' => 6
        ]);

        CategoryFilm::create([
            'category_id' => 2,
            'film_id' => 7
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 7
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 7
        ]);
        
        CategoryFilm::create([
            'category_id' => 8,
            'film_id' => 8
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 8
        ]);
        CategoryFilm::create([
            'category_id' => 2,
            'film_id' => 8
        ]);
        CategoryFilm::create([
            'category_id' => 9,
            'film_id' => 8
        ]);
        CategoryFilm::create([
            'category_id' => 12,
            'film_id' => 8
        ]);
        
        CategoryFilm::create([
            'category_id' => 8,
            'film_id' => 9
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 9
        ]);
        CategoryFilm::create([
            'category_id' => 2,
            'film_id' => 9
        ]);
        CategoryFilm::create([
            'category_id' => 9,
            'film_id' => 9
        ]);
        CategoryFilm::create([
            'category_id' => 12,
            'film_id' => 9
        ]);

        //Aventura , Comedia, Familiar, Animación
        CategoryFilm::create([
            'category_id' => 8,
            'film_id' => 10
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 10
        ]);
        CategoryFilm::create([
            'category_id' => 3,
            'film_id' => 10
        ]);
        CategoryFilm::create([
            'category_id' => 13,
            'film_id' => 10
        ]);
        
        CategoryFilm::create([
            'category_id' => 9,
            'film_id' => 11
        ]);
        CategoryFilm::create([
            'category_id' => 17,
            'film_id' => 11
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 11
        ]);
        CategoryFilm::create([
            'category_id' => 3,
            'film_id' => 11
        ]);
        CategoryFilm::create([
            'category_id' => 8,
            'film_id' => 11
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 11
        ]);
        
        //Animación, Comedia, Familiar, Fantasía, Aventura , Infantil
        CategoryFilm::create([
            'category_id' => 13,
            'film_id' => 12
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 12
        ]);
        CategoryFilm::create([
            'category_id' => 3,
            'film_id' => 12
        ]);
        CategoryFilm::create([
            'category_id' => 17,
            'film_id' => 12
        ]);
        CategoryFilm::create([
            'category_id' => 8,
            'film_id' => 12
        ]);
        
        CategoryFilm::create([
            'category_id' => 14,
            'film_id' => 13
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 13
        ]);
        CategoryFilm::create([
            'category_id' => 3,
            'film_id' => 13
        ]);
        
        //Animación, Familiar, Drama, Comedia, Fantasía
        CategoryFilm::create([
            'category_id' => 13,
            'film_id' => 14
        ]);
        CategoryFilm::create([
            'category_id' => 3,
            'film_id' => 14
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 14
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 14
        ]);
        
        // Drama, Thriller, Misterio, Fantasía, Horror, Terror, Suspenso
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 15
        ]);
        CategoryFilm::create([
            'category_id' => 4,
            'film_id' => 15
        ]);
        CategoryFilm::create([
            'category_id' => 12,
            'film_id' => 15
        ]);

        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 16
        ]);
        CategoryFilm::create([
            'category_id' => 4,
            'film_id' => 16
        ]);
        
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 17
        ]);
        CategoryFilm::create([
            'category_id' => 4,
            'film_id' => 17
        ]);
        CategoryFilm::create([
            'category_id' => 12,
            'film_id' => 17
        ]);
        
        //Fantasía, Música, Romance, Navidad, Comedia
        CategoryFilm::create([
            'category_id' => 16,
            'film_id' => 18
        ]);
        CategoryFilm::create([
            'category_id' => 5,
            'film_id' => 18
        ]);
        CategoryFilm::create([
            'category_id' => 14,
            'film_id' => 18
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 18
        ]);

        //Drama, Navidad, Romance
        CategoryFilm::create([
            'category_id' => 5,
            'film_id' => 19
        ]);
        CategoryFilm::create([
            'category_id' => 14,
            'film_id' => 19
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 19
        ]);

        CategoryFilm::create([
            'category_id' => 13,
            'film_id' => 20
        ]);
        CategoryFilm::create([
            'category_id' => 3,
            'film_id' => 20
        ]);
        CategoryFilm::create([
            'category_id' => 6,
            'film_id' => 20
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 20
        ]);
        CategoryFilm::create([
            'category_id' => 8,
            'film_id' => 20
        ]);

        // Mini slide
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 21
        ]);

        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 22
        ]);

        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 23
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 23
        ]);
        
        //Accion, Comedio, Crimen
        CategoryFilm::create([
            'category_id' => 9,
            'film_id' => 24
        ]);
        CategoryFilm::create([
            'category_id' => 11,
            'film_id' => 24
        ]);
        CategoryFilm::create([
            'category_id' => 2,
            'film_id' => 24
        ]);

        //Aventura, Familiar, Fantasia
        CategoryFilm::create([
            'category_id' => 8,
            'film_id' => 25
        ]);
        CategoryFilm::create([
            'category_id' => 3,
            'film_id' => 25
        ]);
        
        //Drama, Romance
        CategoryFilm::create([
            'category_id' => 5,
            'film_id' => 26
        ]);
        CategoryFilm::create([
            'category_id' => 15,
            'film_id' => 26
        ]);
        
        //Biografico, Familiar, Deportes
        /*CategoryFilm::create([
            'category_id' => 1,
            'film_id' => 27
        ]);
        CategoryFilm::create([
            'category_id' => 3,
            'film_id' => 27
        ]);
        CategoryFilm::create([
            'category_id' => 6,
            'film_id' => 27
        ]);*/

        //Ciencia ficción. Acción | Años 80. Secuela. Superhéroes. Cómic. Marvel Comics
        /*CategoryFilm::create([
            'category_id' => 9,
            'film_id' => 28
        ]);*/

        //Documental, Guerra
        /*CategoryFilm::create([
            'category_id' => 10,
            'film_id' => 29
        ]);
        CategoryFilm::create([
            'category_id' => 7,
            'film_id' => 29
        ]);*/

    }
}
