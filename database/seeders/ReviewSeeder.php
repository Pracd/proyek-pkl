<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        // Insert beberapa ulasan produk ke dalam tabel reviews
        DB::table('reviews')->insert([
            [
                'product_id' => 1,
                'user_id' => 1,
                'comment' => 'Produk luar biasa! Kualitas sangat memuaskan.',
                'rating' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => 2,
                'user_id' => 2,
                'comment' => 'Performa sangat bagus, tapi baterainya cepat habis.',
                'rating' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => 3,
                'user_id' => 3,
                'comment' => 'Gambar tajam, tapi harganya terlalu mahal.',
                'rating' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => 4,
                'user_id' => 1,
                'comment' => 'Headphone sangat nyaman dipakai dalam waktu lama.',
                'rating' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => 5,
                'user_id' => 2,
                'comment' => 'Kulkas ini sangat membantu, tapi sedikit berisik.',
                'rating' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
