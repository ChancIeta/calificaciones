<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CarrerasTableSeeder::class);
//         $this->call(AlumnosTableSeeder::class);
//         $this->call(MaestrosTableSeeder::class);
         $this->call(ExampleController::class);
//         $this->call(UsersTableSeeder::class);
    }
}
