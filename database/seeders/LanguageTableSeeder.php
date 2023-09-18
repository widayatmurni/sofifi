<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([[
            'code' => 'id',
            'country_name' => 'Indonesia',
            'flag' => 'flag_id.svg',
            ],
            [
            'code' => 'en',
            'country_name' => 'English',
            'flag' => 'flag_us.svg',
            ],
            [
            'code' => 'ch',
            'country_name' => 'China',
            'flag' => 'flag_ch.svg',
            ],
            [
            'code' => 'ko',
            'country_name' => 'Korea Selatan',
            'flag' => 'flag_ko.svg',
            ]
        ]);
    }
}
