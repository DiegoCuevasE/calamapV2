<?php

use Illuminate\Database\Seeder;
use App\Mypes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MypesTableSeeder::class);
    }
}
