<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('landings')->insert(
            [
                [
                    'title' => 'Corporate Website',
                    'detail' => 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing tools.'
                ],

            ]
        );
    }
}
