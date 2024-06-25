<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert(
            [
                [
                    'title' => 'Refreshing Design',
                    'detail' => 'Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna.'
                ],
                [
                    'title' => 'Solid Bootstrap 5',
                    'detail' => 'Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna.'
                ],
                [
                    'title' => '100+ Components',
                    'detail' => 'Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna.'
                ],
                [
                    'title' => 'Speed Optimized',
                    'detail' => 'Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna.'
                ],
                [
                    'title' => 'Fully Customizable',
                    'detail' => 'Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna.'
                ],
                [
                    'title' => 'Regular Updates',
                    'detail' => 'Lorem ipsum dolor sit amet, adipiscing elitr, sed diam nonumy eirmod tempor invidunt labor et dolore magna.'
                ],

            ]
        );
    }
}
