<?php

namespace Database\Seeders;

use App\Models\Shoppingcoinlist;
use Illuminate\Database\Seeder;

class ShoppingcoinlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shoppingcoinlist::create([
            'shoppingcoinlist'=>'Provides savings and discounts for all members'
        ]);
        Shoppingcoinlist::create([
            'shoppingcoinlist'=>'Mobile eWallet / digital bank account'
        ]);
        Shoppingcoinlist::create([
            'shoppingcoinlist'=>'Shopping Club Debit card'
        ]);
        Shoppingcoinlist::create([
            'shoppingcoinlist'=>'Great service from Merchants'
        ]);
    }
}
