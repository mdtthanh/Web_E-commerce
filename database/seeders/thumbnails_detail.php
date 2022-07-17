<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class thumbnails_detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thumbnails_details')->insert([
            [
                'id_product' => '0',
                'url' => 'shop/shop-0.jpg'
            ],

            [
                'id_product' => '0',
                'url' => 'product/details/product-1.jpg'
            ],

            [
                'id_product' => '0',
                'url' => 'product/details/product-2.jpg'
            ],

            [
                'id_product' => '0',
                'url' => 'product/details/product-3.jpg'
            ],

            [
                'id_product' => '0',
                'url' => 'product/details/product-4.jpg'
            ],

            [
                'id_product' => '0',
                'url' => 'product/details/thumb-1.jpg'
            ],

            [
                'id_product' => '0',
                'url' => 'product/details/thumb-2.jpg'
            ],

            [
                'id_product' => '0',
                'url' => 'product/details/thumb-3.jpg'
            ],

            [
                'id_product' => '0',
                'url' => 'product/details/thumb-4.jpg'
            ]
        ]);
    }
}
