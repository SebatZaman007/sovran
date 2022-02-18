<?php

namespace Database\Seeders;

use App\Models\Features;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Features::create([
            'features_image'=>'special-features-icon/special-feature-1.png',
            'features_header'=>'SECURITY',
            'features_pera'=>'User admin dashboard and your data are securely synchronized across all your authorized devices.'
        ]);
        Features::create([
            'features_image'=>'special-features-icon/special-feature-2.png',
            'features_header'=>'Anonymity',
            'features_pera'=>'Sovran technology supports strong anonymity utilizing only your email without any personal data shared.'
        ]);
        Features::create([
            'features_image'=>'special-features-icon/special-feature-3.png',
            'features_header'=>'Efficiency',
            'features_pera'=>'Our network handles up to one million transactions per minute. There are no wait times when using Sovran.'
        ]);
        Features::create([
            'features_image'=>'special-features-icon/special-feature-4.png',
            'features_header'=>'Synchronization',
            'features_pera'=>'User admin dashboard and your data are securely synchronized across all your authorized devices.'
        ]);
    }
}
