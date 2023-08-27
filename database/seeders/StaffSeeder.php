<?php

namespace Database\Seeders;

use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
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
                'club_id' => 9,
                'name' => 'Thomas Tuchel',
                'slug' => 'thomas-tuchel',
                'role' => 'Coach',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Anthony Barry',
                'slug' => 'anthony-barry',
                'role' => 'Coach',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Arno Michels',
                'slug' => 'arno-michels',
                'role' => 'Coach',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Zsolt Low',
                'slug' => 'zsolt-low',
                'role' => 'Coach',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Michael Rechner',
                'slug' => 'michael-rechner',
                'role' => 'Coach',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Holger Broich',
                'slug' => 'holger-broich',
                'role' => 'Coach',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Nicolas Mayer',
                'slug' => 'nicolas-mayer',
                'role' => 'Coach',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
          
        ];

        Staff::insert($data);
    }
}
