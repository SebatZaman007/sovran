<?php

namespace Database\Seeders;

use App\Models\Footerleft;
use Illuminate\Database\Seeder;

class FooterleftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footerleft::create([
            'footerleft_image'=>'footer-logo.png',
            'footerleft_title'=>'SOVRAN SHOPPING CLUB'
        ]);
    }
}
