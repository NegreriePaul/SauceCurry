<?php

use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\User;

Class UsersTableSeeder extends Seeder {



    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'paul.negrerie@gmail.com',
            'password' => Hash::make('saucecurry'),
            'name' => 'Paul',
            'admin'=>1
        ));

        User::create(array(
            'email' => 'singh.gurnavdeep@gmail.com',
            'password' => Hash::make('saucecurry'),
            'name' => 'Apu',
            'admin'=>1
        ));

        User::create(array(
            'email' => 'dudoux.thomas@gmail.com',
            'password' => Hash::make('saucecurry'),
            'name' => 'Grincheux',
            'admin'=>1
        ));


        User::create(array(
            'email' => 'barca.lesputes@arbitrepaye.com',
            'password' => Hash::make('pedale'),
            'name' => 'Marcel Tisserand',
            'admin'=>0
        ));
    }

}
