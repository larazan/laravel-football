<?php

namespace Database\Seeders;

use App\Models\CategoryFaq;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryFaqSeeder extends Seeder
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
                'name' => 'Orders',
                'slug' => 'orders',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Returns',
                'slug' => 'returns',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Payments',
                'slug' => 'payments',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Products',
                'slug' => 'products',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Delivery',
                'slug' => 'delivery',
                'created_at' => Carbon::now(),
            ],
        ];

        CategoryFaq::insert($data);
    }
}
