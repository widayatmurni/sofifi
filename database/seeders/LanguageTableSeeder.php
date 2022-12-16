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
            'flag' => '',
            ],
            [
            'code' => 'en',
            'country_name' => 'English',
            'flag' => '',
            ],
            [
            'code' => 'ch',
            'country_name' => 'China',
            'flag' => '',
            ],
            [
            'code' => 'ko',
            'country_name' => 'Korea Selatan',
            'flag' => '',
            ]
        ]);
    }
}
