<?php

namespace Database\Seeders;

use App\Models\Footerlink;
use Illuminate\Database\Seeder;

class FooterlinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footerlink::create([
            'footerlink_icon'=>'fa fa-facebook',
            'footerlink_link'=>'#'
        ]);
        Footerlink::create([
            'footerlink_icon'=>'fa-brands fa-vimeo-v',
            'footerlink_link'=>'#'
        ]);
        Footerlink::create([
            'footerlink_icon'=>'fa-solid fa-envelope',
            'footerlink_link'=>'#'
        ]);
    }
}
