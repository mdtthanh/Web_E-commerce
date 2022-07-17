<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 0,
            'product_name' => 'ESSENTIAL STRUCTURED BLAZER',
            'brand' => 'SKMEIMore Men Watches',
            'persons_type' => 'Men',
            'quantity' => 100,
            'price' => 1000,
            'category_id' => 0,
            'sale_numbers' => 0,
            'description' => 'data to test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
