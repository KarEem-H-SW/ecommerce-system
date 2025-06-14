<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'description' => 'Description for product 1',
                'price' => 19.99,
                'category' => 'Category A',
                'quantity' => 10,
                'image' => "http://ecommerce-system.test/storage/products/t-shirt.png",
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for product 2',
                'price' => 29.99,
                'category' => 'Category B',
                'quantity' => 5,
                'image' => "http://ecommerce-system.test/storage/products/t-shirt.png",
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for product 3',
                'price' => 39.99,
                'category' => 'Category A',
                'quantity' => 15,
                'image' => "http://ecommerce-system.test/storage/products/t-shirt.png",
            ],
        ]);
    }
}
