<?php

namespace Database\Seeders;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
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
                'name' => 'Adidas',
                'slug' => 'adidas',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Nike',
                'slug' => 'nike',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Under Armor',
                'slug' => 'under-armor',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Puma',
                'slug' => 'puma',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Brand::insert($data);
    }
}
