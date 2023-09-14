<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = User::create([
            'first_name' => 'author', 
            'last_name' => 'mimin', 
            'email' => 'author@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('author1234'),
        ]);

        $author->assignRole('author');

        $sales = User::create([
            'first_name' => 'sales', 
            'last_name' => 'sale', 
            'email' => 'sales@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('sales1234'),
        ]);
        
        $sales->assignRole('sales');
    }
}
