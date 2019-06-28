<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $year= mt_rand(1900, date("Y"));
 
        //Generate a random month.
        $month= mt_rand(1, 12);
        
        //Generate a random day.
        $day= mt_rand(1, 28);
        
        //Using the Y-M-D format.
        $randomDate = $year . "-" . $month . "-" . $day;


        DB::table('users')->insert([
            'nombre' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'tipo_usuario' => '1',
            'fechaNac' => $randomDate,
            'genero' => rand(0, 1),
        ]);

        $year= mt_rand(1900, date("Y"));
 
        //Generate a random month.
        $month= mt_rand(1, 12);
        
        //Generate a random day.
        $day= mt_rand(1, 28);
        
        //Using the Y-M-D format.
        $randomDate = $year . "-" . $month . "-" . $day;

        DB::table('users')->insert([
            'nombre' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'tipo_usuario' => '1',
            'fechaNac' => $randomDate,
            'genero' => rand(0, 1),
        ]);

        $year= mt_rand(1900, date("Y"));
 
        //Generate a random month.
        $month= mt_rand(1, 12);
        
        //Generate a random day.
        $day= mt_rand(1, 28);
        
        //Using the Y-M-D format.
        $randomDate = $year . "-" . $month . "-" . $day;


        DB::table('users')->insert([
            'nombre' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'tipo_usuario' => '1',
            'fechaNac' => $randomDate,
            'genero' => rand(0, 1),
        ]);

        $year= mt_rand(1900, date("Y"));
 
        //Generate a random month.
        $month= mt_rand(1, 12);
        
        //Generate a random day.
        $day= mt_rand(1, 28);
        
        //Using the Y-M-D format.
        $randomDate = $year . "-" . $month . "-" . $day;

        DB::table('users')->insert([
            'nombre' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'tipo_usuario' => '1',
            'fechaNac' => $randomDate,
            'genero' => rand(0, 1),
        ]);
    }
}
