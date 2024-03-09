<?php

namespace Database\Seeders;

use App\Models\Trophy;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThropySeeder extends Seeder
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
                'competition_id' => 1,
                'trophy' => 'uploads/trophies/bundesliga_1693413132.dfb_pokale.png',
                'created_at' => Carbon::now(),
            ],
            [
                'competition_id' => 2,
                'trophy' => 'uploads/trophies/champion-league_1693670776.cl_pokale.png',
                'created_at' => Carbon::now(),
            ],
        ];

        Trophy::insert($data);
    }
}
