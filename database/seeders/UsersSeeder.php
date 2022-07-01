<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->insert([
            'name' => 'Kelfran Aponte',
            'email' => 'Apontekelfran@gmail.com',
             'password' => bcrypt('12345678')
        ]);




        DB::table('users')->insert([
            'name' => 'Jose Lopez',
            'email' => 'Jose@gmail.com',
             'password' => bcrypt('laravel')
        ]);



            DB::table('users')->insert([
            'name' => 'Rafael Pineda',
            'email' => 'RafaelPineda@gmail.com',
             'password' => bcrypt('12345678')
        ]);


            DB::table('users')->insert([
            'name' => 'Moises Vargas',
            'email' => 'MoisesVargas@gmail.com',
             'password' => bcrypt('12345678')
        ]);


          DB::table('users')->insert([
            'name' => 'Jose Gonzales',
            'email' => 'JoseGonzales@gmail.com',
             'password' => bcrypt('12345678')
        ]);

          

          DB::table('users')->insert([
            'name' => 'Juan Jose',
            'email' => 'JuanJose@gmail.com',
             'password' => bcrypt('12345678')
        ]);



            DB::table('users')->insert([
            'name' => 'OmarDaniel',
            'email' => 'OmarDaniel@gmail.com',
             'password' => bcrypt('12345678')
        ]);


             DB::table('users')->insert([
            'name' => 'Carlos Lopez',
            'email' => 'Carloslopez@gmail.com',
             'password' => bcrypt('12345678')
        ]);


        DB::table('users')->insert([
            'name' => 'Jose Martinez',
            'email' => 'JoseMartinez@gmail.com',
             'password' => bcrypt('12345678')
        ]);


        DB::table('users')->insert([
            'name' => 'Andrez Rodriguez',
            'email' => 'AndrezRodriguez@gmail.com',
             'password' => bcrypt('12345678')
        ]);



         DB::table('users')->insert([
            'name' => 'Felipe Guevara',
            'email' => 'FelipeGuevara@gmail.com',
             'password' => bcrypt('12345678')
        ]);
    }
}
