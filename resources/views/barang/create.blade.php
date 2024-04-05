@extends('layouts.template')
{{-- Customize layout sections --}}
@section('subtitle', 'Barang')
@section('content_header_title', 'Barang')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat barang baru</h3>
            </div>

            <form method="post" action="{{ url('barang') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kategorid">Kategori ID</label>
                        <input type="text" class="form-control" id="kategorid" name="kategorid"
                            placeholder="Masukkan Kategori ID">
                    </div>
                    <div class="form-group">
                        <label for="kodeBarang">Kode Barang</label>
                        <input type="text" class="form-control" id="kodeBarang" name="kodeBarang"
                            placeholder="Masukkan Kode Barang">
                    </div>
                    <div class="form-group">
                        <label for="namaBarang">Nama Barang</label>
                        <input type="text" class="form-control" id="namaBarang" name="namaBarang"
                            placeholder="Masukkan Nama Barang">
                    </div>
                    <div class="form-group">
                        <label for="hargabeli">Harga Beli</label>
                        <input type="text" class="form-control" id="hargabeli" name="hargabeli"
                            placeholder="Masukkan Kode Barang">
                    </div>
                    <div class="form-group">
                        <label for="hargajual">Harga Jual</label>
                        <input type="text" class="form-control" id="hargajual" name="hargajual"
                            placeholder="Masukkan Nama Barang">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
@endsection