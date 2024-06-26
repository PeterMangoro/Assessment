<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@user.com',
        ]);

        $this->call([
           FooterSeeder::class,
           ImageSeeder::class,
           LandingSeeder::class,
           PackageSeeder::class,
           PointSeeder::class,
           PriceSeeder::class,
           ServiceSeeder::class,
           StorySeeder::class,
        ]);
    }
}
