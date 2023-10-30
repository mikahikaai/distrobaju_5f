@extends('landing')

@section('JUDUL', 'Barang | Tambah Data')

@section('CONTENT')
    <form action="/barang" method="POST">
        @csrf
        <div class="card mt-2">
            <div class="card-header">
                <h3 class="card-title">Barang</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" id="" placeholder="Masukkan Nama Barang. . ."
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis Barang</label>
                    <select name="jenis_barang" class="form-select">
                        <option value="" disabled>--Pilih Jenis Barang--</option>
                        <?php
                            $options = ['baju', 'celana', 'topi', 'sepatu'];
                            foreach ($options as $option) { ?>
                        <option value="{{ $option }}">{{ ucfirst($option) }}</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga_barang">Harga Barang</label>
                    <input type="number" name="harga_barang" id="" placeholder="Masukkan Harga Barang. . ."
                        class="form-control">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
@endsection
