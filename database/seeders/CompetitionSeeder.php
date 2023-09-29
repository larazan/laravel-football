<?php

namespace Database\Seeders;

use App\Models\Competition;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
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
                'name' => 'Bundesliga',
                'slug' => 'bundesliga',
                'info' => 'lorem ipsum dolor sit amet',
                'logo' => 'uploads/competitions/bundesliga_1695909816.539_bundes_liga_logo.jpg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Champion League',
                'slug' => 'champion-league',
                'info' => 'lorem ipsum dolor sit amet',
                'logo' => 'uploads/competitions/champion-league_1695909836.994_champions_league.jpg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
           
        ];

        Competition::insert($data);
    }
}
