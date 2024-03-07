<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Galang',
                'penjualan_kode' => 'DONE01',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Gilang',
                'penjualan_kode' => 'DONE02',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Jati',
                'penjualan_kode' => 'DONE03',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Nadila',
                'penjualan_kode' => 'DONE04',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Fablo',
                'penjualan_kode' => 'DONE05',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Wisang',
                'penjualan_kode' => 'DONE06',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Fadly',
                'penjualan_kode' => 'DONE07',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Maulana',
                'penjualan_kode' => 'DONE08',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Delinda',
                'penjualan_kode' => 'DONE09',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Galur',
                'penjualan_kode' => 'DONE010',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
