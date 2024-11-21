<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'brand_name' => 'Cashed Casino',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/cashed-casino.png',
                'rating' => 5,
                'country' => 'fr',
            ],
            [
                'brand_name' => 'Talismania',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/talismania-casino.png',
                'rating' => 5,
                'country' => 'fr',
            ],
            [
                'brand_name' => 'Gransino',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/gransino-casino.png',
                'rating' => 5,
                'country' => 'fr',
            ],
            [
                'brand_name' => 'Alexa​nder',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/alexander-casino.png',
                'rating' => 5,
                'country' => 'fr',
            ],
            [
                'brand_name' => 'Betalright',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/betalright-casino.png',
                'rating' => 4,
                'country' => 'fr',
            ],
            [
                'brand_name' => 'Casombie',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Casombie-Casino.png',
                'rating' => 4,
                'country' => 'fr',
            ],
            [
                'brand_name' => 'Kingmaker',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/kingmaker-casino.png',
                'rating' => 4,
                'country' => 'bg',
            ],
            [
                'brand_name' => 'Legend Play',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/LegendPlay-Casino.png',
                'rating' => 4,
                'country' => 'bg',
            ],
            [
                'brand_name' => 'Nine Casino',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/nine-casino.png',
                'rating' => 4,
                'country' => 'bg',
            ],
        ]);
    }
}
