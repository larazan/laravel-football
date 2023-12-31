<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name' => 'Shirt',
                'slug' => 'shirt',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Shock',
                'slug' => 'shock',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Shoes',
                'slug' => 'shoes',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Hat',
                'slug' => 'hat',
                'created_at' => Carbon::now(),
            ],
        ];

        Category::insert($data);
    }
}
