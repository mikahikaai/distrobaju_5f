@extends('landing')

@section('JUDUL', 'Pengguna | Lihat Data')

@section('CONTENT')
    <div class="card mt-2">
        <div class="card-header">
            <h3 class="card-title">Pengguna</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Plat</label>
                <input type="text" name="nama" id="" placeholder="Masukkan Nama. . ." class="form-control"
                    value="{{ $penggunas->nama }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="" placeholder="Masukkan Alamat. . ." class="form-control"
                    value="{{ $penggunas->alamat }}">
            </div>
            <div class="form-group">
                <label for="no_telp">Nomor Telpon</label>
                <input type="text" name="no_telp" id="" placeholder="Masukkan No Telp. . ." class="form-control"
                    value="{{ $penggunas->no_telp }}">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" class="form-control" value="{{ $penggunas->role }}">
            </div>
        </div>
    </div>
@endsection
