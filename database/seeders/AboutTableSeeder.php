<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
        'about_image'=>'about-img.png',
        'about_header'=>'Why join Sovran Shopping Club?',
        'about_name1'=>'Private ',
        'about_name2'=>' Club',
        'about_whatdowedo'=>'What do we do?',
        'about_whatdowedo_pera'=>'Sovran realized that the world was heading toward a digital blockchain-based economy and launched a one-of-a-kind private ‘peer to peer’ payment system for its Members. Members can shop, hold digital coins in private and secure eWallets, and instantaneously transfer money anywhere between Members. '
        ]);
    }
}
