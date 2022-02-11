<?php

namespace Database\Seeders;

use App\Models\Aboutcontent;
use Illuminate\Database\Seeder;

class AboutcontentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Aboutcontent::create([
        'aboutcontent_name'=>'Why do we do it?',
        'aboutcontent_pera'=>'The Sovran Shopping Club’s goal is to help Merchants in communities around the world.Communities have lost 60% of small businesses. We will help Merchants while earning residual income for the supporting Members!  '
       ]);
       Aboutcontent::create([
        'aboutcontent_name'=>'Who are we?',
        'aboutcontent_pera'=>'The Sovran Shopping Club, along with the Sovran Network, developed a private digital payment system for the marketplace.'
       ]);
    }
}
