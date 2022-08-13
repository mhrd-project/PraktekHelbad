<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Exception;

class TransaksiController extends Controller
{
    public function indexpembelian()
    {
        $data = Transaksi::where('kategori', 'pembelian')->with('barang')->get();

        return view('pembelian.index', compact('data'));
    }

    public function showpembelian($id)
    {
        $transaksi = Transaksi::where('id', $id)->with('barang')->first();

        $data = [
            'id' => $transaksi->id,
            'nama' => $transaksi->barang->nama,
            'jumlah'=> $transaksi->jumlah,
            'harga' => $transaksi->barang->harga,
            'total' => (int)$transaksi->barang->harga * (int)$transaksi->jumlah
        ];
        $data = (object) $data;

        return view('pembelian.slip', compact('data'));
    }

    public function createpembelian()
    {
        $barang = Barang::all();

        return view('pembelian.create', compact('barang'));
    }

    public function storepembelian(Request $request)
    {
        $id    = $request->id_barang;
        $jumlah= $request->stok;

        $model_barang       = Barang::where('id', $id)->first();
        $model_barang->stok = ((int)$model_barang->stok + (int)$jumlah);

        $model_trans  = new Transaksi();
        $model_trans->id_barang = $id;
        $model_trans->jumlah    = $jumlah;
        $model_trans->kategori  = 'pembelian';
        
        try {
            $model_barang->save();
            $model_trans->save();
        } catch (Exception $e) {
            session()->flash('warning', $e->getMessage());
            return redirect("pembelian");
        }

        $data = [
            'id' => $model_trans->id,
            'nama' => $model_barang->nama,
            'jumlah'=> $jumlah,
            'harga' => $model_barang->harga,
            'total' => (int)$model_barang->harga * (int)$jumlah
        ];
        $data = (object) $data;

        return view('pembelian.slip', compact('data'));
    }

    public function indexpenjualan()
    {
        $data = Transaksi::where('kategori', 'penjualan')->with('barang')->get();

        return view('penjualan.index', compact('data'));
    }

    public function showpenjualan($id)
    {
        $transaksi = Transaksi::where('id', $id)->with('barang')->first();

        $data = [
            'id' => $transaksi->id,
            'nama' => $transaksi->barang->nama,
            'jumlah'=> $transaksi->jumlah,
            'harga' => $transaksi->barang->harga,
            'total' => (int)$transaksi->barang->harga * (int)$transaksi->jumlah
        ];
        $data = (object) $data;

        return view('penjualan.slip', compact('data'));
    }

    public function createpenjualan()
    {
        $barang = Barang::all();

        return view('penjualan.create', compact('barang'));
    }

    public function storepenjualan(Request $request)
    {
        $id    = $request->id_barang;
        $jumlah= $request->stok;

        $model_barang       = Barang::where('id', $id)->first();
        $model_barang->stok = ((int)$model_barang->stok - (int)$jumlah);

        $model_trans  = new Transaksi();
        $model_trans->id_barang = $id;
        $model_trans->jumlah    = $jumlah;
        $model_trans->kategori  = 'penjualan';
        
        try {
            $model_barang->save();
            $model_trans->save();
        } catch (Exception $e) {
            session()->flash('warning', $e->getMessage());
            return redirect("penjualan");
        }

        $data = [
            'id' => $model_trans->id,
            'nama' => $model_barang->nama,
            'jumlah'=> $jumlah,
            'harga' => $model_barang->harga,
            'total' => (int)$model_barang->harga * (int)$jumlah
        ];
        $data = (object) $data;

        return view('penjualan.slip', compact('data'));
    }
}
