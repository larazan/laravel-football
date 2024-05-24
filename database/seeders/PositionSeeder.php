<?php

namespace Database\Seeders;

use App\Models\Position;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
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
                'name' => 'Goalkeeper',
                'slug' => 'goalkeeper',
                'abbreviation' => 'GK',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Right Back',
                'slug' => 'right-back',
                'abbreviation' => 'RB',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Center Back',
                'slug' => 'center-back',
                'abbreviation' => 'CB',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Left Back',
                'slug' => 'left-back',
                'abbreviation' => 'LB',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Right Wing Back',
                'slug' => 'right-wing-back',
                'abbreviation' => 'RWB',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Left Wing Back',
                'slug' => 'left-wing-back',
                'abbreviation' => 'LWB',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Right Midfielder',
                'slug' => 'right-midfielder',
                'abbreviation' => 'RM',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Center Midfielder',
                'slug' => 'center-midfielder',
                'abbreviation' => 'CM',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Left Midfielder',
                'slug' => 'left-midfielder',
                'abbreviation' => 'LM',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Right Winger',
                'slug' => 'right-winger',
                'abbreviation' => 'RW',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Left Winger',
                'slug' => 'left-winger',
                'abbreviation' => 'LW',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Attacking Midfielder',
                'slug' => 'attacking-midfielder',
                'abbreviation' => 'AM',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Striker',
                'slug' => 'striker',
                'abbreviation' => 'ST',
                'created_at' => Carbon::now(),
            ],
        ];

        Position::insert($data);
    }
}
