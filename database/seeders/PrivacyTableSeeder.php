<?php

namespace Database\Seeders;

use App\Models\Privacy;
use Illuminate\Database\Seeder;

class PrivacyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Privacy::create([
            'privacy_image'=>'network-3.png',
            'privacy_header'=>'PRIVACY AND ENCRYPTION'
        ]);
    }
}
