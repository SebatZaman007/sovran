<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(MainlogoTableSeeder::class);
        $this->call(HomeTableSeeder::class);
        $this->call(VideoposterTableSeeder::class);
        $this->call(VideoareaTableSeeder::class);
        $this->call(EcommrceedgelargeTableSeeder::class);
        $this->call(EcommrceedgesmallTableSeeder::class);
        $this->call(AboutTableSeeder::class);




    }
}
