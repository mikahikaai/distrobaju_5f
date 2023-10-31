<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pengguna;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::paginate(10);
        return view('transaksi.read', ['transaksis' => $transaksi]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = Pengguna::all();
        $barang = Barang::all();
        return view('transaksi.create', [
            'penggunas' => $pengguna,
            'barangs' => $barang,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'pengguna_id' => $request->pengguna_id,
            'barang_id' => $request->barang_id,
            'qty' => $request->qty,
        ]);

        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.show', [
            'transaksis' => $transaksi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = Pengguna::all();
        $barang = Barang::all();
        $transaksi = Transaksi::find($id);
        return view('transaksi.update', [
            'transaksis' => $transaksi,
            'penggunas' => $pengguna,
            'barangs' => $barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->pengguna_id = $request->pengguna_id;
        $transaksi->barang_id = $request->barang_id;
        $transaksi->qty = $request->qty;
        $transaksi->save();

        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $transaksi = Transaksi::find($id)->delete();
       return redirect('/transaksi');
    }
}
