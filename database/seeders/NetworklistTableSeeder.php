<?php

namespace Database\Seeders;

use App\Models\Networklist;
use Illuminate\Database\Seeder;

class NetworklistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Networklist::create([
            'networklist'=>'Provides savings and discounts for all members'
        ]);
        Networklist::create([
            'networklist'=>'Mobile eWallet / digital bank account'
        ]);
        Networklist::create([
            'networklist'=>'Shopping Club Debit card'
        ]);
        Networklist::create([
            'networklist'=>'Great service from Merchants'
        ]);
    }
}
