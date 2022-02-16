<?php

namespace Database\Seeders;

use CreateMemberfacilitylistsTable;
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
        $this->call(AboutcontentTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(MarchentTableSeeder::class);
        $this->call(MemberfasilityTableSeeder::class);
        $this->call(NetworkTableSeeder::class);
        $this->call(NetworklistTableSeeder::class);
        $this->call(ShoppingcoinTableSeeder::class);
        $this->call(ShoppingcoinlistTableSeeder::class);
        $this->call(PrivacyTableSeeder::class);
        $this->call(PrivacylistTableSeeder::class);
        $this->call(ComingsoonTableSeeder::class);
        $this->call(JoinusTableSeeder::class);

    }
}
