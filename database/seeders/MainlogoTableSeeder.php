<?php

namespace Database\Seeders;

use App\Models\Mainlogo;
use Illuminate\Database\Seeder;

class MainlogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mainlogo::create([
            'mainlogo_image'=>'logo.png',
            'mainlogo_name'=>''
        ]);
    }
}
