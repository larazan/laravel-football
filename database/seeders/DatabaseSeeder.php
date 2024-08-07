<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoryFaq;
use App\Models\Competition;
use App\Models\Position;
use App\Models\Product;
use App\Models\TeamLeague;
use App\Models\Timezone;
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
            // CountrySeeder::class,
            // ClubSeeder::class,
            // PositionSeeder::class,
            // PlayerSeeder::class,
            // StaffSeeder::class,
            // CompetitionSeeder::class,
            // PartnerSeeder::class,
            // CategoryArticleSeeder::class,
            // SettingSeeder::class,
            // AwardSeeder::class,
            // SegmentSeeder::class,
            // RoleSeeder::class,
            // UserSeeder::class,
            // CategoryFaqSeeder::class,
            // FaqSeeder::class,
            // FootbalerSeeder::class,
            // CategorySeeder::class,
            // BrandSeeder::class,
            // EventSeeder::class,
            // TimezoneSeeder::class,
            // ThropySeeder::class,
            // CustomerSeeder::class,
            // AttributeSeeder::class,
            // AttributeOptionSeeder::class,
            
            // FormationSeeder::class,
            // ArticleSeeder::class,
            // TrainingSeeder::class,
            ProductSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
