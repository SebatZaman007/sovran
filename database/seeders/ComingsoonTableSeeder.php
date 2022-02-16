<?php

namespace Database\Seeders;

use App\Models\Comingsoon;
use Illuminate\Database\Seeder;

class ComingsoonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Comingsoon::create([
        'comingsoon_title_one'=>'MEMBER',
        'comingsoon_title_two'=>'& MERCHANT',
        'comingsoon_title_three'=>'PROMOTIONS',
        'comingsoon_image'=>'coming-soon-product.png',
       ]);
    }
}
