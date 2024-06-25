<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('points')->insert(
            [
                [
                    'title' => 'Cas justo odio',
                    
                ],
                [
                    'title' => 'Dapibus ac facilis in',

                ],
                [
                    'title' => 'Mobi leo risus',

                ],
                [
                    'title' => 'Exceptuer sint occaecat velit',

                ],
               

            ]
        );
    }
}
