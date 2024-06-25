<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footers')->insert(
            [
                [
                    'title' => 'We love to make perfect solutions for your business',
                    'detail' => 'Why I say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Block funny around chesed of bum bag old lost the pilot spiffing off his nut.'
                ],

            ]
        );
    }
}
