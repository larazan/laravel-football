<?php

namespace Database\Seeders;

use App\Models\Award;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
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
                'year' => '2022',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'competition_id' => 1,
                'year' => '2021',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'competition_id' => 1,
                'year' => '2020',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'competition_id' => 1,
                'year' => '2019',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'competition_id' => 2,
                'year' => '2020',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Award::insert($data);
    }
}
