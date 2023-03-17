<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'Samsung A53',
            'description' => 'lorem ipsum lorem',
            'stock' => 10,
            'price' => 10000000
        ]);

        Product::create([
            'product_name' => 'Samsung S20',
            'description' => 'lorem ipsum lorem',
            'stock' => 220,
            'price' => 19000000,
        ]);

        User::create([
            'email' => 'rylanristia@gmail.com',
            'password' => Hash::make('apriliaanjani0608'),
            'name' => 'Rylanristia'
        ]);
    }
}