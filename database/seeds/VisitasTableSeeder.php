<?php

use Illuminate\Database\Seeder;

class VisitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $start = strtotime("23 May 2019");
 
        //End point of our date range.
        $end = strtotime("23 June 2019");
        
        //Custom range.
        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);
        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

        $timestamp = mt_rand($start, $end);

        DB::table('visitas')->insert([
            'user_id' => rand(1, 72),
            'mype_id' => 5,
            'created_at' => date("Y-m-d", $timestamp),
        ]);

    }
}
