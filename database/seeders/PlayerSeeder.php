<?php

namespace Database\Seeders;

use App\Models\Player;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
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
                'club_id' => 9,
                'name' => 'Manuel Neuer',
                'slug' => 'manuel-neuer',
                'position_id' => 1,
                'shirt_number' => 1,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Sven Ulrich',
                'slug' => 'sven-ulrich',
                'position_id' => 1,
                'shirt_number' => 26,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Yann Sommer',
                'slug' => 'yann-sommer',
                'position_id' => 1,
                'shirt_number' => 27,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Dayot Upamecano',
                'slug' => 'dayot-upamecano',
                'position_id' => 2,
                'shirt_number' => 2,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Kim Minjae',
                'slug' => 'kim-minjae',
                'position_id' => 2,
                'shirt_number' => 3,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Matthijs de Ligt',
                'slug' => 'matthijs-de-ligt',
                'position_id' => 2,
                'shirt_number' => 4,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Benjamin Pavard',
                'slug' => 'benjamin-pavard',
                'position_id' => 2,
                'shirt_number' => 5,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Alphonso Davies',
                'slug' => 'alphonso-davies',
                'position_id' => 2,
                'shirt_number' => 19,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Bouna Sarr',
                'slug' => 'bouna-sarr',
                'position_id' => 2,
                'shirt_number' => 20,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Raphael Guerreiro',
                'slug' => 'raphael-guerreiro',
                'position_id' => 2,
                'shirt_number' => 22,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Noussair Mazraoui',
                'slug' => 'noussair-mazraoui',
                'position_id' => 2,
                'shirt_number' => 40,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Josip Stanisic',
                'slug' => 'josip-stanisic',
                'position_id' => 2,
                'shirt_number' => 44,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Joshua Kimmich',
                'slug' => 'joshua-kimmich',
                'position_id' => 3,
                'shirt_number' => 6,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Leon Goretzka',
                'slug' => 'leon-goretzka',
                'position_id' => 3,
                'shirt_number' => 8,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Paul Wanner',
                'slug' => 'paul-wanner',
                'position_id' => 3,
                'shirt_number' => 14,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Ryan Gravenberch',
                'slug' => 'ryan-gravenberch',
                'position_id' => 3,
                'shirt_number' => 38,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Jamal Musiala',
                'slug' => 'jamal-musiala',
                'position_id' => 3,
                'shirt_number' => 42,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Konrad Laimer',
                'slug' => 'konrad-laimer',
                'position_id' => 3,
                'shirt_number' => 27,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Serge Gnabry',
                'slug' => 'serge-gnabry',
                'position_id' => 4,
                'shirt_number' => 7,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Harry Kane',
                'slug' => 'harry-kane',
                'position_id' => 4,
                'shirt_number' => 9,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Leroy Sane',
                'slug' => 'leroy-sane',
                'position_id' => 4,
                'shirt_number' => 10,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ], 
            [
                'club_id' => 9,
                'name' => 'Kingsley Coman',
                'slug' => 'kingsley-coman',
                'position_id' => 4,
                'shirt_number' => 11,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Eric Maxim Choupo-Moting',
                'slug' => 'eric-maxim-choupo-moting',
                'position_id' => 4,
                'shirt_number' => 13,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Thomas Muller',
                'slug' => 'thomas-muller',
                'position_id' => 4,
                'shirt_number' => 25,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ], 
            [
                'club_id' => 9,
                'name' => 'Gabriel Vidovic',
                'slug' => 'gabriel-vidovic',
                'position_id' => 4,
                'shirt_number' => 32,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Mathys Tel',
                'slug' => 'mathys-tel',
                'position_id' => 4,
                'shirt_number' => 39,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Arjon Ibrahimovic',
                'slug' => 'arjon-ibrahimovic',
                'position_id' => 4,
                'shirt_number' => 46,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ], 
            
        ];

        Player::insert($data);
    }
}
