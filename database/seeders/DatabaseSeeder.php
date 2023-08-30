<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Competition;
use App\Models\TeamLeague;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // AdminSeeder::class,
            // StadionSeeder::class,
            // ClubSeeder::class,
            // PlayerSeeder::class,
            // StaffSeeder::class,
            // CompetitionSeeder::class,
            // PartnerSeeder::class,
            CategoryArticleSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
