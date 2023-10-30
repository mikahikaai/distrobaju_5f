@extends('landing')

@section('JUDUL', 'Barang | Home')

@section('CONTENT')
<a href="/barang/create" class="btn btn-success my-2">Tambah barang</a>

<table class="table table-bordered table-collapsed table-striped table-hover">
	<thead class="table-info">
		<th>No.</th>
		<th>Nama Barang</th>
		<th>Jenis Barang</th>
		<th>Harga Barang</th>
		<th>Opsi</th>
	</thead>
	<tbody>
		<?php $no = 1; ?>
		@foreach ($barangs as $barang)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $barang->nama_barang }}</td>
			<td>{{ $barang->jenis_barang }}</td>
			<td>{{"Rp. " .  number_format($barang->harga_barang,0,",",".") }}</td>
			<td>
				<form action="/barang/{{ $barang->id }}" method="POST">
					<a href="barang/{{ $barang->id }}" class="btn btn-sm btn-success">Lihat</a>
					<a href="barang/{{ $barang->id }}/edit" class="btn btn-sm btn-primary">Ubah</a>
					@csrf
					@method('delete')
					<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
Halaman : {{ $barangs->currentPage() }} <br />
Jumlah Data : {{ $barangs->total() }} <br />
Data Per Halaman : {{ $barangs->perPage() }} <br />
<div class="mt-3">
	{{ $barangs->links() }}
</div>
@endsection