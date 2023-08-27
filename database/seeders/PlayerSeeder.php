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
                'role' => 'Goalkeeper',
                'shirt_number' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Sven Ulrich',
                'slug' => 'sven-ulrich',
                'role' => 'Goalkeeper',
                'shirt_number' => 26,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Yann Sommer',
                'slug' => 'yann-sommer',
                'role' => 'Goalkeeper',
                'shirt_number' => 27,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Dayot Upamecano',
                'slug' => 'dayot-upamecano',
                'role' => 'Defender',
                'shirt_number' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Kim Minjae',
                'slug' => 'kim-minjae',
                'role' => 'Defender',
                'shirt_number' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Matthijs de Ligt',
                'slug' => 'matthijs-de-ligt',
                'role' => 'Defender',
                'shirt_number' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Benjamin Pavard',
                'slug' => 'benjamin-pavard',
                'role' => 'Defender',
                'shirt_number' => 5,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Alphonso Davies',
                'slug' => 'alphonso-davies',
                'role' => 'Defender',
                'shirt_number' => 19,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Bouna Sarr',
                'slug' => 'bouna-sarr',
                'role' => 'Defender',
                'shirt_number' => 20,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Raphael Guerreiro',
                'slug' => 'raphael-guerreiro',
                'role' => 'Defender',
                'shirt_number' => 22,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Noussair Mazraoui',
                'slug' => 'noussair-mazraoui',
                'role' => 'Defender',
                'shirt_number' => 40,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Josip Stanisic',
                'slug' => 'josip-stanisic',
                'role' => 'Defender',
                'shirt_number' => 44,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Joshua Kimmich',
                'slug' => 'joshua-kimmich',
                'role' => 'Midfielder',
                'shirt_number' => 6,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Leon Goretzka',
                'slug' => 'leon-goretzka',
                'role' => 'Midfielder',
                'shirt_number' => 8,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Paul Wanner',
                'slug' => 'paul-wanner',
                'role' => 'Midfielder',
                'shirt_number' => 14,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Ryan Gravenberch',
                'slug' => 'ryan-gravenberch',
                'role' => 'Midfielder',
                'shirt_number' => 38,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Jamal Musiala',
                'slug' => 'jamal-musiala',
                'role' => 'Midfielder',
                'shirt_number' => 42,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Konrad Laimer',
                'slug' => 'konrad-laimer',
                'role' => 'Midfielder',
                'shirt_number' => 27,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Serge Gnabry',
                'slug' => 'serge-gnabry',
                'role' => 'Attacker',
                'shirt_number' => 7,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Harry Kane',
                'slug' => 'harry-kane',
                'role' => 'Attacker',
                'shirt_number' => 9,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Leroy Sane',
                'slug' => 'leroy-sane',
                'role' => 'Attacker',
                'shirt_number' => 10,
                'created_at' => Carbon::now(),
            ], 
            [
                'club_id' => 9,
                'name' => 'Kingsley Coman',
                'slug' => 'kingsley-coman',
                'role' => 'Attacker',
                'shirt_number' => 11,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Eric Maxim Choupo-Moting',
                'slug' => 'eric-maxim-choupo-moting',
                'role' => 'Attacker',
                'shirt_number' => 13,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Thomas Muller',
                'slug' => 'thomas-muller',
                'role' => 'Attacker',
                'shirt_number' => 25,
                'created_at' => Carbon::now(),
            ], 
            [
                'club_id' => 9,
                'name' => 'Gabriel Vidovic',
                'slug' => 'gabriel-vidovic',
                'role' => 'Attacker',
                'shirt_number' => 32,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Mathys Tel',
                'slug' => 'mathys-tel',
                'role' => 'Attacker',
                'shirt_number' => 39,
                'created_at' => Carbon::now(),
            ],
            [
                'club_id' => 9,
                'name' => 'Arjon Ibrahimovic',
                'slug' => 'arjon-ibrahimovic',
                'role' => 'Attacker',
                'shirt_number' => 46,
                'created_at' => Carbon::now(),
            ], 
            
        ];

        Player::insert($data);
    }
}
