<?php

namespace Database\Seeders;

use App\Models\Videoarearight;
use Illuminate\Database\Seeder;

class VideoareaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Videoarearight::create([
        'videoarea_name'=>'Support Merchants,Earn Rewards!',
        'videoarea_description'=>'Save for your Dreams!',
        'videoarea_pera'=>'The Sovran Shopping Club offers Members total privacy and a unique form of savings. Our Members access our Merchants’ products and services with an opportunityto participate in a lucrative Rewards Program.',

        ]);
    }
}
