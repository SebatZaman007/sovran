<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Member::create([
        'member_image'=>'members-1.jpg',
        'member_header'=>'Club advantages',
        'member_title1'=>'Shopping Club ',
        'member_title2'=>' Members'
       ]);

      
    }
}
