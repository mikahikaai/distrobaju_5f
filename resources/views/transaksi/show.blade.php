@extends('landing')

@section('JUDUL', 'Transaksi | Lihat Data')

@section('CONTENT')
    <div class="card mt-2">
        <div class="card-header">
            <h3 class="card-title">Barang</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="pengguna_id">Nama Pelanggan</label>
                <input type="text" value="{{ $transaksis->pengguna->nama }}" class="form-control" disabled>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" name="jenis_barang" value="{{ $transaksis->barang->jenis_barang }}"
                            class="form-control" disabled>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" value="{{ $transaksis->barang->nama_barang }}"
                            class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="qty">Jumlah</label>
                        <input type="number" name="qty" value="{{ $transaksis->qty }}" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" value="{{"Rp. " .  number_format($transaksis->barang->harga_barang,0,",",".") }}" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="text" name="total" value="{{ "Rp. " . number_format($transaksis->barang->harga_barang * $transaksis->qty,0,",",".") }}" class="form-control" disabled>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
