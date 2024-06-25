<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stories')->insert(
            [
                [
                    'title' => 'Our team comes with experience and knowledge',
                    'detail' => 'It is a well established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,look like readable English.

There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humor.'
                ],

            ]
        );
    }
}
