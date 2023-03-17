<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
            'price' => 19000000
        ]);
    }
}