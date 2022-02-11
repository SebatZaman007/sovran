<?php

namespace Database\Seeders;

use App\Models\Memberfacilitylist;
use Illuminate\Database\Seeder;

class MemberfasilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Memberfacilitylist::create([
           'memberfasilitylist'=>'Provides savings and discounts for all members'
       ]);
       Memberfacilitylist::create([
           'memberfasilitylist'=>'Mobile eWallet / digital bank account'
       ]);
       Memberfacilitylist::create([
           'memberfasilitylist'=>'Shopping Club Debit card'
       ]);
       Memberfacilitylist::create([
           'memberfasilitylist'=>'Great service from Merchants'
       ]);
       Memberfacilitylist::create([
           'memberfasilitylist'=>'Referral and residual rewards'
       ]);
       Memberfacilitylist::create([
           'memberfasilitylist'=>'Financial stability'
       ]);
       Memberfacilitylist::create([
           'memberfasilitylist'=>'Supports your Local Businesses and Communities'
       ]);
       Memberfacilitylist::create([
           'memberfasilitylist'=>'True Financial Freedom'
       ]);
    }
}
