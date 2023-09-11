<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $position = [
            [
                'name' => 'Right Back',
                'slug' => 'right-back',
                'parent_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Center Back',
                'slug' => 'center-back',
                'parent_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Left Back',
                'slug' => 'left-back',
                'parent_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Right Wing Back',
                'slug' => 'right-wing-back',
                'parent_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Left Wing Back',
                'slug' => 'left-wing-back',
                'parent_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Defensive Midfielder',
                'slug' => 'defensive-midfielder',
                'parent_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Right Winger',
                'slug' => 'right-winger',
                'parent_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Midfielder Center',
                'slug' => 'midfielder-center',
                'parent_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Deep Lying Playmaker',
                'slug' => 'deep-lying-playmaker',
                'parent_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Left Winger',
                'slug' => 'left-winger',
                'parent_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Inferted Winger',
                'slug' => 'inferted-winger',
                'parent_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Attacking Midfielder',
                'slug' => 'attacking-midfielder',
                'parent_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Advance Playmaker',
                'slug' => 'advance-playmaker',
                'parent_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Inside Forward',
                'slug' => 'inside-forward',
                'parent_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Second Striker',
                'slug' => 'second-striker',
                'parent_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Center Forward',
                'slug' => 'center-forward',
                'parent_id' => 4,
                'created_at' => Carbon::now(),
            ],
        ];
    }
}
