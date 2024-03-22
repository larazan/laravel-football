<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
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
                'code' => 'color',
                'name' => 'Warna',
                'type' => 'select',
                'validation' => NULL,
                'is_required' => 0,
                'is_unique' => 1,
                'is_filterable' => 1,
                'is_configurable' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'size',
                'name' => 'Ukuran',
                'type' => 'select',
                'validation' => NULL,
                'is_required' => 0,
                'is_unique' => 1,
                'is_filterable' => 1,
                'is_configurable' => 1,
                'created_at' => Carbon::now(),
            ],
        ];

        Attribute::insert($data);
    }
}
