<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class users extends Controller
{
    //
    use RegistersUsers;

        /**
         * Get a validator for an incoming registration request.
         *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    public function ver()
    {
      return view('admin.Addusers');
    }

    public function store()
    {
      $data=request()->validate([
        'name'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password'=>'required',
      ]);
  //toma al usuario logeado y lo inserta junto a la demas informacion

  return User::create([
      'name' => $data['name'],
      'username' => $data['username'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
  ]);


    }


}
