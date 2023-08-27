<?php

namespace Database\Seeders;

use App\Models\Club;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Vfl Wolfsburg',
                'slug' => 'vfl-wolfsburg',
                'stadion_id' => 12,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Vfl Bochum 1848',
                'slug' => 'vfl-bochum-1848',
                'stadion_id' => 13,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Vfb Stuttgart',
                'slug' => 'vfb-stuttgart',
                'stadion_id' => 15,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'TSG 1899 Hoffenheim',
                'slug' => 'tsg-hoffenheim',
                'stadion_id' => 9,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'SV Werder Bremen',
                'slug' => 'sv-werder-bremen',
                'stadion_id' => 18,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'SV Darmstadt 98',
                'slug' => 'sv-darmstadt-98',
                'stadion_id' => 19,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'SC Freiburg',
                'slug' => 'sc-freiburg',
                'stadion_id' => 6,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'RB Leipzig',
                'slug' => 'rb-leipzig',
                'stadion_id' => 4,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Bayen Munich',
                'slug' => 'fc-bayen-munich',
                'stadion_id' => 1,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Augsburg',
                'slug' => 'fc-augsburg',
                'stadion_id' => 14,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Eintracht Frankfurt',
                'slug' => 'eintracht-frankfurt',
                'stadion_id' => 11,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Borussia Monchengladbach',
                'slug' => 'borussia-monchengladbach',
                'stadion_id' => 10,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Borussia Dortmund',
                'slug' => 'borussia-dortmund',
                'stadion_id' => 2,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Bayer 04 Leverkusen',
                'slug' => 'bayer-04-leverkusen',
                'stadion_id' => 3,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FSV Mainz 05',
                'slug' => 'fsv-mainz-05',
                'stadion_id' => 8,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Union Berlin',
                'slug' => 'fc-union-berlin',
                'stadion_id' => 5,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Koln',
                'slug' => 'fc-koln',
                'stadion_id' => 7,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Heidenheim 1846',
                'slug' => 'fc-Heidenheim-1846',
                'stadion_id' => 20,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
           
        ];

        Club::insert($data);
    }
}
