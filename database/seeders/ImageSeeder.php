<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert(
            [
                [
                    'path' => 'landing-1.png',
                    'imageable_id' => 1,
                    'imageable_type' => 'App\Models\Landing',
                ],
                [
                    'path' => 'landing-2.png',
                    'imageable_id' => 1,
                    'imageable_type' => 'App\Models\Story',
                ],
                [
                    'path' => 'pill.png',
                    'imageable_id' => 1,
                    'imageable_type' => 'App\Models\Service',
                ],
                [
                    'path' => 'bootstrap.png',
                    'imageable_id' => 2,
                    'imageable_type' => 'App\Models\Service',
                ],
                [
                    'path' => 'components.png',
                    'imageable_id' => 3,
                    'imageable_type' => 'App\Models\Service',
                ],
                [
                    'path' => 'speed.png',
                    'imageable_id' => 4,
                    'imageable_type' => 'App\Models\Service',
                ],
                [
                    'path' => 'customizable.png',
                    'imageable_id' => 5,
                    'imageable_type' => 'App\Models\Service',
                ],
                [
                    'path' => 'updates.png',
                    'imageable_id' => 6,
                    'imageable_type' => 'App\Models\Service',
                ],

            ]
        );
    }
}
