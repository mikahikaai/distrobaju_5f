@extends('landing')

@section('JUDUL', 'Pengguna | Update Data')

@section('CONTENT')
    <form action="/pengguna/{{ $penggunas->id }}" method="post">
        @csrf
        @method('PUT')
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
                    <input type="text" name="alamat" id="" placeholder="Masukkan Alamat. . ."
                        class="form-control" value="{{ $penggunas->alamat }}">
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telpon</label>
                    <input type="text" name="no_telp" id="" placeholder="Masukkan No Telp. . ."
                        class="form-control" value="{{ $penggunas->no_telp }}">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="" class="form-select">
                        <option value="" disabled>-- Pilih Jenis Mobil --</option>
                        <?php
                            $options = ['owner', 'pelanggan','kasir'];
                            foreach ($options as $option) {
                                $selected = $option == $penggunas->role ? 'selected' : '';
                                ?>
                        <option {{ $selected }} value="{{ $option }}">{{ ucfirst($option) }}</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <button class="btn btn-sm btn-primary">Simpan</button>
    </form>
@endsection
