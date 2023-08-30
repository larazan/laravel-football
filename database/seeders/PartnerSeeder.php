<?php

namespace Database\Seeders;

use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
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
                'title' => 'Adobe',
                'original' => 'images/Adobe_Corporate_25px.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Allianz',
                'original' => 'images/Allianz.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Audi',
                'original' => 'images/Audi.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Konami',
                'original' => 'images/Konami.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Libertex',
                'original' => 'images/Libertex.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Adidas',
                'original' => 'images/neu-Adidas.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Viesmann',
                'original' => 'images/Viesmann-02.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Sap',
                'original' => 'images/Sap.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Telekom',
                'original' => 'images/Telekom.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Tipico',
                'original' => 'images/Tipico.svg',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Partner::insert($data);
    }
}
