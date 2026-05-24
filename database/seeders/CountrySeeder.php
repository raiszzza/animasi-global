<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            ['name' => 'Amerika Serikat', 'flag_emoji' => '🇺🇸'],
            ['name' => 'Jepang',          'flag_emoji' => '🇯🇵'],
            ['name' => 'China',           'flag_emoji' => '🇨🇳'],
            ['name' => 'Prancis',         'flag_emoji' => '🇫🇷'],
            ['name' => 'Inggris',         'flag_emoji' => '🇬🇧'],
            ['name' => 'Kanada',          'flag_emoji' => '🇨🇦'],
            ['name' => 'Korea Selatan',   'flag_emoji' => '🇰🇷'],
        ];

        foreach ($countries as $data) {
            Country::create($data);
        }
    }
}
