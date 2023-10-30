@extends('landing')

@section('JUDUL', 'Pengguna | Tambah Data')

@section('CONTENT')
    <form action="/pengguna" method="POST">
        @csrf
        <div class="card mt-2">
            <div class="card-header">
                <h3 class="card-title">Pengguna</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Plat</label>
                    <input type="text" name="nama" id="" placeholder="Masukkan Nama. . ."
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="" placeholder="Masukkan Alamat. . ."
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telpon</label>
                    <input type="text" name="no_telp" id="" placeholder="Masukkan No Telp. . ."
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="" class="form-control">
                        <option value="" disabled>-- Pilih Jenis Mobil --</option>
                        <option value="owner">Owner</option>
                        <option value="pelanggan">Pelanggan</option>
                        <option value="kasir">Kasir</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
@endsection
