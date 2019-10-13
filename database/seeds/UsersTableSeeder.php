<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * name
         * email
         * username
         * password
         */
        $user = new User();
        $user->name = "Alberto Virrey";
        $user->email = "juan.javc06@gmail.com";
        $user->username = "juanjavc06";
        $user->password = Hash::make("123456");
        $user->save();
    }
}
