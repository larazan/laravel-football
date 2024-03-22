<?php

namespace Database\Seeders;

use App\Models\AttributeOption;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeOptionSeeder extends Seeder
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
                'attribute_id' => 1,
                'name' => 'Hitam',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 1,
                'name' => 'Putih',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 2,
                'name' => 'Kecil',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 2,
                'name' => 'Sedang',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 2,
                'name' => 'Besar',
                'created_at' => Carbon::now(),
            ],
        ];

        AttributeOption::insert($data);
    }
}
