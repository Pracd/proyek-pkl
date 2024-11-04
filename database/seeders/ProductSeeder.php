<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Insert beberapa data produk ke dalam tabel products
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Smartphone Samsung Galaxy S21',
                'description' => 'Smartphone dengan layar Dynamic AMOLED 2X dan prosesor Exynos 2100.',
                'image' => 'images/samsung_galaxy_s21.jpg',
                'price' => 9999999.00,
                'stock' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Laptop MacBook Pro 14"',
                'description' => 'MacBook Pro dengan chip M1 Pro dan layar Retina XDR.',
                'image' => 'images/macbook_pro_14.jpg',
                'price' => 23999999.00,
                'stock' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 3,
                'name' => 'TV LG OLED 55"',
                'description' => 'TV OLED dengan teknologi AI dan 4K UHD.',
                'image' => 'images/lg_oled_55.jpg',
                'price' => 14999999.00,
                'stock' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 4,
                'name' => 'Sony WH-1000XM4',
                'description' => 'Headphone noise cancelling dengan fitur Adaptive Sound Control.',
                'image' => 'images/sony_wh_1000xm4.jpg',
                'price' => 4999999.00,
                'stock' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 5,
                'name' => 'Kulkas Samsung Twin Cooling',
                'description' => 'Kulkas dengan dua sistem pendingin untuk kesegaran maksimal.',
                'image' => 'images/samsung_twin_cooling.jpg',
                'price' => 7999999.00,
                'stock' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
