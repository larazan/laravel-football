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
                'logo' => 'uploads/clubs/vfl-wolfsburg_1693477571.wolfsburg.png',
                'stadion_id' => 12,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Vfl Bochum 1848',
                'slug' => 'vfl-bochum-1848',
                'logo' => 'uploads/clubs/vfl-bochum-1848_1693495451.bochum.png',
                'stadion_id' => 13,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Vfb Stuttgart',
                'slug' => 'vfb-stuttgart',
                'logo' => 'uploads/clubs/vfb-stuttgart_1693495435.vfb.png',
                'stadion_id' => 15,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'TSG 1899 Hoffenheim',
                'slug' => 'tsg-hoffenheim',
                'logo' => 'uploads/clubs/tsg-1899-hoffenheim_1693495133.hoffenheim.png',
                'stadion_id' => 9,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'SV Werder Bremen',
                'slug' => 'sv-werder-bremen',
                'logo' => 'uploads/clubs/sv-werder-bremen_1693495070.werderbremen.png',
                'stadion_id' => 18,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'SV Darmstadt 98',
                'slug' => 'sv-darmstadt-98',
                'logo' => 'uploads/clubs/sv-darmstadt-98_1693495345.darmstadt.png',
                'stadion_id' => 19,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'SC Freiburg',
                'slug' => 'sc-freiburg',
                'logo' => 'uploads/clubs/sc-freiburg_1693492813.scfreiburg.png',
                'stadion_id' => 6,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'RB Leipzig',
                'slug' => 'rb-leipzig',
                'logo' => 'uploads/clubs/rb-leipzig_1693403412.rbleipzig.png',
                'stadion_id' => 4,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Bayen Munich',
                'slug' => 'fc-bayen-munich',
                'logo' => 'uploads/clubs/fc-bayen-munich_1693477537.bayern.png',
                'stadion_id' => 1,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Augsburg',
                'slug' => 'fc-augsburg',
                'logo' => 'uploads/clubs/fc-augsburg_1693492749.augsburg.png',
                'stadion_id' => 14,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Eintracht Frankfurt',
                'slug' => 'eintracht-frankfurt',
                'logo' => 'uploads/clubs/eintracht-frankfurt_1693477514.frankfrut.png',
                'stadion_id' => 11,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Borussia Monchengladbach',
                'slug' => 'borussia-monchengladbach',
                'logo' => 'uploads/clubs/borussia-monchengladbach_1693405459.gladbach.png',
                'stadion_id' => 10,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Borussia Dortmund',
                'slug' => 'borussia-dortmund',
                'logo' => 'uploads/clubs/borussia-dortmund_1693405444.dortmunt.png',
                'stadion_id' => 2,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Bayer 04 Leverkusen',
                'slug' => 'bayer-04-leverkusen',
                'logo' => 'uploads/clubs/bayer-04-leverkusen_1693403563.leverkusen.png',
                'stadion_id' => 3,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FSV Mainz 05',
                'slug' => 'fsv-mainz-05',
                'logo' => 'uploads/clubs/fsv-mainz-05_1693492793.mainz.png',
                'stadion_id' => 8,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Union Berlin',
                'slug' => 'fc-union-berlin',
                'logo' => 'uploads/clubs/fc-union-berlin_1693492779.union_berlin.png',
                'stadion_id' => 5,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Koln',
                'slug' => 'fc-koln',
                'logo' => 'uploads/clubs/fc-koln_1693410504.koln.png',
                'stadion_id' => 7,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'FC Heidenheim 1846',
                'slug' => 'fc-Heidenheim-1846',
                'logo' => 'uploads/clubs/fc-heidenheim-1846_1693492761.heidenheim.png',
                'stadion_id' => 20,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
           
        ];

        Club::insert($data);
    }
}
