<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Alumno;
class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Alberto Virrey";
        $user->email = "juan.javc06@gmail.com";
        $user->username = "juanjavc06";
        $user->password = Hash::make("123456");
        $user->save();
        
        $alumno = new Alumno();
        $alumno->semestre = 1;
        $alumno->users_id = $user->id;
        $alumno->carreras_id = 1;
        $alumno->save();
        
/*
            $table->bigIncrements('id');
            $table->integer('semestre');
            
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('carreras_id');

 
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('carreras_id')->references('id')->on('carreras');
 */        
        
    }
}
