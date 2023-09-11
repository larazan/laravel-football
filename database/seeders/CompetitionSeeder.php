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
                'thropy' => 'uploads/trophies/bundesliga_1693413132.dfb_pokale.png',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Champion League',
                'slug' => 'champion-league',
                'info' => 'lorem ipsum dolor sit amet',
                'thropy' => 'uploads/trophies/champion-league_1693670776.cl_pokale.png',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
           
        ];

        Competition::insert($data);
    }
}
