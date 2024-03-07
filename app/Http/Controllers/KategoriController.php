<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // $data = [
        //     'kategori-kode' => 'SNK',
        //     'kategori_nama' => 'Snack',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategori')->where('kategori-kode', 'SNK')->update(['kategori_nama' => 'Cemilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate : ' . $row.' baris';
        
        $row = DB::table('m_kategori')->where('kategori-kode', 'SNK')->delete();
        return 'Delete data berhasil. Jumlah data yang dihapus : ' . $row.' baris';
    }
}