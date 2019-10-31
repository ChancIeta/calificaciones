<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Maestro;

class MaestrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Antonio Ramirez";
        $user->email = "antonio@tectijuana.edu.mx";
        $user->username = "antonio_";
        $user->password = Hash::make("123456");
        $user->save();
        
        $alumno = new Maestro();
        $alumno->titulo = "XHB-12YONN";
        $alumno->users_id = $user->id;
        $alumno->save();
    }
}
