<?php

use Illuminate\Database\Seeder;

use App\Carreras;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carretas = new Carreras();
        $carretas->name = "Ingenieria de Sistemas Computacionales";
        $carretas->code = "ING-SE-2";
        $carretas->save();
    }
}
