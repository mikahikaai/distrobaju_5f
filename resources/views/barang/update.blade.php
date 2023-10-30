@extends('landing')

@section('JUDUL', 'Barang | Ubah Data')

@section('CONTENT')
    <form action="/barang/{{ $barangs->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="card mt-2">
            <div class="card-header">
                <h3 class="card-title">Barang</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" id="" placeholder="Masukkan Nama Barang. . ."
                        class="form-control" value="{{ $barangs->nama_barang }}">
                </div>
                <div class="form-group">
                    <label for="jenis_barang">jenis Barang</label>
                    <select name="jenis_barang" class="form-select">
                        <option value="" disabled>-- Pilih Jenis Barang --</option>
                        <?php
                            $options = ['baju', 'celana','topi', 'sepatu'];
                            foreach ($options as $option) {
                                $selected = $option == $barangs->jenis_barang ? 'selected' : '';
                                ?>
                        <option {{ $selected }} value="{{ $option }}">{{ ucfirst($option) }}</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga_barang">Harga Barang</label>
                    <input type="text" name="harga_barang" id="" placeholder="Masukkan Harga Barang. . ."
                        class="form-control" value="{{ $barangs->harga_barang }}">
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
