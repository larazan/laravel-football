<?php

namespace Database\Seeders;

use App\Models\Stadion;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StadionSeeder extends Seeder
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
                'name' => 'Allianz Arena',
                'slug' => 'allianz-arena',
                'city' => 'munich',
                'capacity' => 75000,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Signal Iduna Park',
                'slug' => 'signal-iduna-park',
                'city' => 'dortmund',
                'capacity' => 81365,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Bay Arena',
                'slug' => 'bay-arena',
                'city' => 'leverkusen',
                'capacity' => 30210,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Red Bull Arena',
                'slug' => 'red-bull-arena',
                'city' => 'leipzig',
                'capacity' => 47069,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Stadion An der Alten Forsterei',
                'slug' => 'stadion-an-der-alten-forsterei',
                'city' => 'berlin',
                'capacity' => 22012,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Europa Park Stadion',
                'slug' => 'europa-park-stadion',
                'city' => 'freiburg',
                'capacity' => 34700,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'RheinEnergieStadion',
                'slug' => 'rheinEnergieStadion',
                'city' => 'cologne',
                'capacity' => 50000,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Mewa Arena',
                'slug' => 'mewa-arena',
                'city' => 'mainz',
                'capacity' => 33305,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Prezero Arena',
                'slug' => 'prezero-arena',
                'city' => 'hoffenheim',
                'capacity' => 30150,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Borussia Park',
                'slug' => 'borussia-park',
                'city' => 'monchengladbach',
                'capacity' => 54057,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Deutshe Bank Park',
                'slug' => 'deutshe-bank-park',
                'city' => 'frankfurt',
                'capacity' => 51500,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Volkswagen Arena',
                'slug' => 'volkswagen-arena',
                'city' => 'wolfsburg',
                'capacity' => 30000,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Vonovia Ruhrstadion',
                'slug' => 'vonovia-ruhrstadion',
                'city' => 'bochum',
                'capacity' => 27599,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'WWK Arena',
                'slug' => 'wwk-arena',
                'city' => 'augsburg',
                'capacity' => 30660,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Mercedes-Benz Arena',
                'slug' => 'mercedes-benz-arena',
                'city' => 'stuttgart',
                'capacity' => 60449,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Olympiastadion',
                'slug' => 'olympiastadion',
                'city' => 'berlin',
                'capacity' => 77475,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Veltins Arena',
                'slug' => 'veltins-arena',
                'city' => 'schalke',
                'capacity' => 62271,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Weserstadion',
                'slug' => 'weserstadion',
                'city' => 'bremen',
                'capacity' => 42100,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Merck-Stadion am Bollenfaltor',
                'slug' => 'merck-stadion-am-bollenfaltor',
                'city' => 'darmstadt',
                'capacity' => 17810,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Voith Arena',
                'slug' => 'voith-arena',
                'city' => 'heidenheim',
                'capacity' => 15000,
                'seat_quality' => 'full kursi',
                'vip' => 'yes',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Stadion::insert($data);
    }
}
