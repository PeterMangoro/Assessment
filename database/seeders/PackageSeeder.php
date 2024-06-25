<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert(
            [
                [
                    'point_id' =>1,
                    'price_id'=>1,
                    'value'=>true,

                ],
                [
                    'point_id' => 2,
                    'price_id' => 1,
                    'value' => true,

                ],
                [
                    'point_id' => 3,
                    'price_id' => 1,
                    'value' => false,

                ],
                [
                    'point_id' => 4,
                    'price_id' => 1,
                    'value' => false,

                ],

                [
                    'point_id' => 1,
                    'price_id' => 2,
                    'value' => true,

                ],
                [
                    'point_id' => 2,
                    'price_id' => 2,
                    'value' => true,

                ],
                [
                    'point_id' => 3,
                    'price_id' => 2,
                    'value' => true,

                ],
                [
                    'point_id' => 4,
                    'price_id' => 2,
                    'value' => false,

                ],

                [
                    'point_id' => 1,
                    'price_id' => 3,
                    'value' => true,

                ],
                [
                    'point_id' => 2,
                    'price_id' => 3,
                    'value' => true,

                ],
                [
                    'point_id' => 3,
                    'price_id' => 3,
                    'value' => true,

                ],
                [
                    'point_id' => 4,
                    'price_id' => 3,
                    'value' => true,

                ],

                
            ]
        );
    }
}
