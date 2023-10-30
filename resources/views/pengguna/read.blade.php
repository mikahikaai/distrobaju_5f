@extends('landing')

@section('JUDUL', 'Pengguna | Home')

@section('CONTENT')
<a href="/pengguna/create" class="btn btn-success my-2">Tambah pengguna</a>

<table class="table table-bordered table-collapsed table-striped table-hover">
	<thead class="table-info">
		<th>No.</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No. Telpon</th>
		<th>Role</th>
		<th>Opsi</th>
	</thead>
	<tbody>
		<?php $no = 1; ?>
		@foreach ($penggunas as $pengguna)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $pengguna->nama }}</td>
			<td>{{ $pengguna->alamat }}</td>
			<td>{{ $pengguna->no_telp }}</td>
			<td>{{ $pengguna->role }}</td>
			<td>
				<form action="/pengguna/{{ $pengguna->id }}" method="POST">
					<a href="pengguna/{{ $pengguna->id }}" class="btn btn-sm btn-success">Lihat</a>
					<a href="pengguna/{{ $pengguna->id }}/edit" class="btn btn-sm btn-primary">Ubah</a>
					@csrf
					@method('delete')
					<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
Halaman : {{ $penggunas->currentPage() }} <br />
Jumlah Data : {{ $penggunas->total() }} <br />
Data Per Halaman : {{ $penggunas->perPage() }} <br />
<div class="mt-3">
	{{ $penggunas->links() }}
</div>
@endsection