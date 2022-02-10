<?php

namespace Database\Seeders;

use App\Models\Ecommrceedgelarge;
use Illuminate\Database\Seeder;

class EcommrceedgelargeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ecommrceedgelarge::create([
            'ecommrceedgelarge_title'=>'eCommrce with an Edge',
            'ecommrceedgelarge_pera'=>'The Sovran Shopping Club is an exclusive digital marketplace for both Members and Merchants. Merchants offer discounts to club Members and Members support Merchants locally or online.',
            'ecommrceedgelarge_link'=>'https://laravel.com/',
        ]);
    }
}
