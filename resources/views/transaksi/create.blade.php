@extends('landing')

@section('JUDUL', 'Transaksi | Tambah Data')

@section('CONTENT')
    <form action="/transaksi" method="POST">
        @csrf
        <div class="card mt-2">
            <div class="card-header">
                <h3 class="card-title">Transaksi</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="pengguna_id">Nama Pelanggan</label>
                    <select name="pengguna_id" class="form-select" required>
                        <option selected value="">--Pilih Pelanggan--</option>
                        <?php
                            foreach ($penggunas as $pengguna) { ?>
                        <option value="{{ $pengguna->id }}">{{ ucfirst($pengguna->nama) }}</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="barang_id">Nama Barang</label>
                    <select name="barang_id" class="form-select" required>
                        <option selected value="">--Pilih Barang--</option>
                        <?php
                            foreach ($barangs as $barang) { ?>
                        <option value="{{ $barang->id }}">{{ ucfirst($barang->nama_barang) }}</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="qty">Jumlah</label>
                    <input type="number" name="qty" id="" placeholder="Masukkan Jumlah Barang. . ."
                        class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
@endsection
