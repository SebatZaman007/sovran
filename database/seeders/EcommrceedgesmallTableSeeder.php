<?php

namespace Database\Seeders;

use App\Models\Ecommrceedgesmall;
use Illuminate\Database\Seeder;

class EcommrceedgesmallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ecommrceedgesmall::create([
            'ecomrceedgesmall_name'=>'Spend',
            'ecomrceedgesmall_pera'=>'Shop and Support Merchants and Save on valuable goods and services',
        ]);
        Ecommrceedgesmall::create([
            'ecomrceedgesmall_name'=>'Send',
            'ecomrceedgesmall_pera'=>'Securely Hold and privately Transfer or Send your digital wealth',
        ]);
    }
}
