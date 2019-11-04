<?php

use Illuminate\Database\Seeder;
use App\Carreras;
use App\User;
use App\Maestro;
use App\Alumno;
use App\ProgresoSemestral;
use App\Asignaturas;
use App\PlanDeEstudios;

class ExampleController extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = new User();
        $user->name = "Luis Enrique";
        $user->email = "luis@gmail.com";
        $user->username = "antonio_";
        $user->password = Hash::make("123456");
        $user->save();

        $maestro = new Maestro();
        $maestro->titulo = "XHB-12YONN";
        $maestro->users_id = $user->id;
        $maestro->save();

        $carreras = new Carreras();
        $carreras->name = "Ingenieria en Sistemas";
        $carreras->code= "ISC";
        $carreras->save();

        $asignaturas = new Asignaturas();
        $asignaturas->name = "Sistemas Programables";
        $asignaturas->code = "SAC-123";
        $asignaturas->unidades = 5;
        $asignaturas->save();

        $planEstudios = new PlanDeEstudios();
        $planEstudios->carrera_id = $carreras->id;
        $planEstudios->asignatura_id = $asignaturas->id;
        $planEstudios->semestre = 1;
        $planEstudios->save();

        for ($index = 0; $index < 30; $index++) {
            $user = new User();
            $user->name = "Alberto Virrey".$index;
            $user->email = "juan.javc06".$index."@gmail.com";
            $user->username = "juanjavc06".$index;
            $user->password = Hash::make("123456");
            $user->save();

            $alumno = new Alumno();
            $alumno->semestre = 1;
            $alumno->users_id = $user->id;
            $alumno->carreras_id = 1;
            $alumno->save();

            $progresoSemestral = new ProgresoSemestral();
            $progresoSemestral->plan_estudios_id = $planEstudios->id;
            $progresoSemestral->asignatura_id = $asignaturas->id;
            $progresoSemestral->alumno_id = $alumno->id;
            $progresoSemestral->maestro_id = $maestro->id;
            $progresoSemestral->estatus = "cursando";
            $progresoSemestral->save();
            //Asignatura padre, del cual esta seriada la materia
//            $table->unsignedBigInteger('plan_estudios_id');
//            //Asignatura seriada
//            $table->unsignedBigInteger('asignatura_id');
//            //Asignatura seriada
//            $table->unsignedBigInteger('alumno_id');
//            $table->unsignedBigInteger('maestro_id');
//            $table->enum('estatus',['cursando','aprovada','reprobada','sin cursar']);


        }
    }

}
