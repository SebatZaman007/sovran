<?php

namespace Database\Seeders;

use App\Models\Marchent;
use Illuminate\Database\Seeder;

class MarchentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Marchent::create([
        'marchent_image'=>'members-2.jpg',
        'marchent_header'=>'Club advantages',
        'marchent_title1'=>'Shopping Club ',
        'marchent_title2'=>' Merchants'
       ]);
    }
}
