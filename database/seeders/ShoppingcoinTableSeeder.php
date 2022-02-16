<?php

namespace Database\Seeders;

use App\Models\Shoppingcoins;
use Illuminate\Database\Seeder;

class ShoppingcoinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shoppingcoins::create([
            'shoppingcoin_image'=>'network-2.png',
            'shoppingcoin_header'=>'SOVRAN SHOPPING COINS',
        ]);
    }
}
