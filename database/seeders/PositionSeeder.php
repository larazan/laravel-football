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
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Defender',
                'slug' => 'defender',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Midfielder',
                'slug' => 'midfielder',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Attacker',
                'slug' => 'attacker',
                'created_at' => Carbon::now(),
            ],
            
        ];

        Position::insert($data);
    }
}
