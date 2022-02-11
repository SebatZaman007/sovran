<?php

namespace Database\Seeders;

use App\Models\Network;
use Illuminate\Database\Seeder;

class NetworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Network::create([
            'network_image'=>'network-1.png',
            'network_header'=>'The Sovran Network',

        ]);
        


    }
}
