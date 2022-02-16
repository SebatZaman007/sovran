<?php

namespace Database\Seeders;

use App\Models\Joinus;
use Illuminate\Database\Seeder;

class JoinusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Joinus::create([
            'joinus_image'=>'join-with-us-img.png',
            'joinus_title_one'=>'JOIN WITH US',
            'joinus_title_two'=>'TODAY',
            'joinus_header'=>'SUPPORT MERCHANTS & EARN REWARDS'
        ]);
    }
}
