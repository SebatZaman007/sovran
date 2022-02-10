<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'home_name1' => 'Sovran Shopping Club ',
            'home_name2' => 'Next Generation ',
            'home_name3' => 'ecommerce',
            'home_name4' => 'services ',
            'home_description'=>'We build relationships between members and Businesses using a private blockchain-based Digital Payment Platform and Iucrative rewards Program',
            'home_image'=>'hero-img.png'

        ]);
    }
}
