<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert(
            [
                [
                    'title' => 'Starter',
                    'detail' => 'Lorem ipsum is simply a dummy test for the printing and industry',
                    'price' =>0,
                    'highlight' => false,
                ],
                [
                    'title' => 'Exclusive',
                    'detail' => 'Lorem ipsum is simply a dummy test for the printing and industry',
                    'price' =>99,
                    'highlight'=>true,
                ],
                [
                    'title' => 'Premium',
                    'detail' => 'Lorem ipsum is simply a dummy test for the printing and industry',
                    'price' => 150,
                    'highlight' => false,
                ],


            ]
        );
    }
}
