<?php

namespace Database\Seeders;

use App\Models\CategoryArticle;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryArticleSeeder extends Seeder
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
                'name' => 'News',
                'slug' => 'news',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Club',
                'slug' => 'club',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'League',
                'slug' => 'league',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Fans',
                'slug' => 'fans',
                'created_at' => Carbon::now(),
            ],
        ];

        CategoryArticle::insert($data);
    }
}
