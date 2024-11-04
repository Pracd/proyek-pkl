<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Insert beberapa kategori alat elektronik ke dalam tabel categories
        DB::table('categories')->insert([
            [
                'name' => 'Smartphone',
                'description' => 'Berbagai jenis dan merek ponsel pintar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptop & Komputer',
                'description' => 'Perangkat laptop, PC, dan aksesoris terkait.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Televisi',
                'description' => 'Smart TV dan LED TV dari berbagai merek.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Audio & Speaker',
                'description' => 'Speaker, headphone, dan perangkat audio lainnya.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Peralatan Rumah Tangga Elektronik',
                'description' => 'Peralatan elektronik seperti kulkas, AC, dan mesin cuci.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
