<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'FA123',
                'barang_nama' => 'ISOPLUS',
                'harga_beli' => 3000,
                'harga_jual' => 3500,
                'created_at' => now()
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'FA124',
                'barang_nama' => 'GOLDA COFFE',
                'harga_beli' => 3000,
                'harga_jual' => 3500,
                'created_at' => now()
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'FA125',
                'barang_nama' => 'KOPI KAPAL AP',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
                'created_at' => now()
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'FA126',
                'barang_nama' => 'KOPI IJO',
                'harga_beli' => 5000,
                'harga_jual' => 6000,
                'created_at' => now()
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'FA127',
                'barang_nama' => 'KOPI IJO SUSU',
                'harga_beli' => 7000,
                'harga_jual' => 8000,
                'created_at' => now()
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'FA128',
                'barang_nama' => 'EXTRAJOSS SUSU',
                'harga_beli' => 7000,
                'harga_jual' => 9000,
                'created_at' => now()
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'FA129',
                'barang_nama' => 'INDOMIE',
                'harga_beli' => 3500,
                'harga_jual' => 6000,
                'created_at' => now()
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'FA130',
                'barang_nama' => 'TELUR',
                'harga_beli' => 13000,
                'harga_jual' => 14000,
                'created_at' => now()
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'FA131',
                'barang_nama' => 'MEJA',
                'harga_beli' => 350000,
                'harga_jual' => 400000,
                'created_at' => now()
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 5,
                'barang_kode' => 'FA132',
                'barang_nama' => 'KURSI',
                'harga_beli' => 300000,
                'harga_jual' => 350000,
                'created_at' => now()
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
