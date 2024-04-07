<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FormationSeeder extends Seeder
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
                'value' => '3412',
                'name' => '3-4-1-2',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '3421', 
                'name' => '3-4-2-1',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '343', 
                'name' => '3-4-3',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '352', 
                'name' => '3-5-2',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '41212a', 
                'name' => '4-1-2-1-2 (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '41212b', 
                'name' => '4-1-2-1-2 (b)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '4141', 
                'name' => '4-1-4-1',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '4222', 
                'name' => '4-2-2-2',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '4231a', 
                'name' => '4-2-3-1 (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '4231b', 
                'name' => '4-2-3-1 (b)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '4312', 
                'name' => '4-3-1-2',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '4321', 
                'name' => '4-3-2-1',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '433a', 
                'name' => '4-3-3 (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '433b', 
                'name' => '4-3-3 (b)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '433c', 
                'name' => '4-3-3 (c)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '433d', 
                'name' => '4-3-3 (d)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '433e', 
                'name' => '4-3-3 (e)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '4411', 
                'name' => '4-4-1-1',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '442a', 
                'name' => '4-4-2 (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '442b', 
                'name' => '4-4-2 (b)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '451a', 
                'name' => '4-5-1 (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '451b', 
                'name' => '4-5-1 (b)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '5212', 
                'name' => '5-2-1-2',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '5221', 
                'name' => '5-2-2-1',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => '532', 
                'name' => '5-3-2',
                'created_at' => Carbon::now(),
            ]

        ];

        Formation::insert($data);
    }
}
