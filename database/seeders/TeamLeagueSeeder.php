<?php

namespace Database\Seeders;

use App\Models\TeamLeague;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamLeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'season' => '2023/2024',
                'team_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 5,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 6,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 7,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 8,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 9,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 10,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 11,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 12,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 13,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 14,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 15,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 16,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 17,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 18,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 19,
                'created_at' => Carbon::now(),
            ],
            [
                'season' => '2023/2024',
                'team_id' => 20,
                'created_at' => Carbon::now(),
            ],
        ];

        TeamLeague::insert($data);
    }
}
