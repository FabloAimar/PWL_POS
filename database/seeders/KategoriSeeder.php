<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori-kode' => 'MNM',
                'kategori_nama' => 'Minuman',
                'created_at' => now(),
            ],
            [
                'kategori-kode' => 'MKN',
                'kategori_nama' => 'Makanan',
                'created_at' => now(),
            ],
            [
                'kategori-kode' => 'SNC',
                'kategori_nama' => 'Snack',
                'created_at' => now(),
            ],
            [
                'kategori-kode' => 'SBK',
                'kategori_nama' => 'Sembako',
                'created_at' => now(),
            ],
            [
                'kategori-kode' => 'PRB',
                'kategori_nama' => 'Perabot',
                'created_at' => now(),
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
