<?php

namespace Database\Seeders;

use App\Models\Videoposter;
use Illuminate\Database\Seeder;

class VideoposterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Videoposter::create([
            'videoposter_image'=>'video-poster.png',
            'videoposter_description'=>'Learn how the Sovran Shopping Club will revolutionize the world of online marketplaces',
            'videoposter_videolink'=>'https://www.youtube.com/watch?v=Xg81i-9cAPw'
        ]);
    }
}
