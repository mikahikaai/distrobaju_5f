@extends('landing')

@section('JUDUL', 'Barang | Lihat Data')

@section('CONTENT')
    <div class="card mt-2">
        <div class="card-header">
            <h3 class="card-title">Barang</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama_barang">nama Barang</label>
                <input type="text" name="nama_barang" id="" placeholder="Masukkan Nama Barang. . ."
                    class="form-control" value="{{ $barangs->nama_barang }}">
            </div>
            <div class="form-group">
                <label for="jenis_barang">Jenis Barang</label>
                <input type="text" name="jenis_barang" id="" placeholder="Masukkan Alamat. . ."
                    class="form-control" value="{{ $barangs->jenis_barang }}">
            </div>
            <div class="form-group">
                <label for="harga_barang">Nomor Telpon</label>
                <input type="text" name="harga_barang" id="" placeholder="Masukkan No Telp. . ."
                    class="form-control" value="{{ $barangs->harga_barang }}">
            </div>
        </div>
    </div>
@endsection
