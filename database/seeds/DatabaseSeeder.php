<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(FilmStateTableSeeder::class);
        $this->call(CategoryFilmsTableSeeder::class);
    }
}
