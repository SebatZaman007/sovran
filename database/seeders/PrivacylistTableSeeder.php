<?php

namespace Database\Seeders;

use App\Models\Privacylist;
use Illuminate\Database\Seeder;

class PrivacylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Privacylist::create([
            'privacylist'=>'Provides savings and discounts for all members'
        ]);
        Privacylist::create([
            'privacylist'=>'Mobile eWallet / digital bank account'
        ]);
        Privacylist::create([
            'privacylist'=>'Shopping Club Debit card'
        ]);
        Privacylist::create([
            'privacylist'=>'Great service from Merchants'
        ]);
    }
}
