@extends('landing')

@section('JUDUL', 'Transaksi | Home')

@section('CONTENT')
<a href="/transaksi/create" class="btn btn-success my-2">Tambah Transaksi</a>

<table class="table table-bordered table-collapsed table-striped table-hover">
	<thead class="table-info">
		<th>No.</th>
		<th>Nama Pelanggan</th>
		<th>Jenis Barang</th>
		<th>Nama Barang</th>
		<th>Qty</th>
		<th>Harga Barang</th>
		<th>Total</th>
		<th>Opsi</th>
	</thead>
	<tbody>
		<?php $no = 1; ?>
		@foreach ($transaksis as $transaksi)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $transaksi->pengguna->nama }}</td>
			<td>{{ $transaksi->barang->jenis_barang }}</td>
			<td>{{ $transaksi->barang->nama_barang }}</td>
			<td>{{ $transaksi->qty }}</td>
			<td>{{"Rp. " .  number_format($transaksi->barang->harga_barang,0,",",".") }}</td>
			<td>{{ "Rp. " .  number_format($transaksi->qty * $transaksi->barang->harga_barang,0,",",".") }}</td>
			<td>
				<form action="/transaksi/{{ $transaksi->id }}" method="POST">
					<a href="transaksi/{{ $transaksi->id }}" class="btn btn-sm btn-success">Lihat</a>
					<a href="transaksi/{{ $transaksi->id }}/edit" class="btn btn-sm btn-primary">Ubah</a>
					@csrf
					@method('delete')
					<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
Halaman : {{ $transaksis->currentPage() }} <br />
Jumlah Data : {{ $transaksis->total() }} <br />
Data Per Halaman : {{ $transaksis->perPage() }} <br />
<div class="mt-3">
	{{ $transaksis->links() }}
</div>
@endsection