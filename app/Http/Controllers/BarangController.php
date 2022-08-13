<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Exception;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::orderBy('id', 'desc')->get();

        return view('barang.index', compact('data'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $latest     = Barang::orderBy('id', 'desc')->first();
        $id         = 1;
        if($latest != null)
            $id     = $latest->id + 1;

        $model            = new Barang();
        $model->id        = $id;
        $model->nama      = $request->nama;
        $model->stok      = $request->stok;

        $harga            = explode(',', $request->harga);
        $harga            = str_replace('.', '', $harga[0]);
        $model->harga      = $harga;

        try {
            $model->save();
        } catch (Exception $e) {
            session()->flash('warning', $e->getMessage());
            return redirect("barang");
        }

        session()->flash('success', 'Berhasil menyimpan barang');
        return redirect("barang");
    }

    public function edit($id)
    {
        $data = Barang::where('id', $id)->first();
        return view('barang.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $model            = Barang::where('id', $id)->first();
        $model->nama      = $request->nama;
        $model->stok      = $request->stok;

        $harga            = explode(',', $request->harga);
        $harga            = str_replace('.', '', $harga[0]);
        $model->harga      = $harga;

        try {
            $model->save();
        } catch (Exception $e) {
            session()->flash('warning', $e->getMessage());
            return redirect("barang");
        }

        session()->flash('success', 'Berhasil mengedit barang');
        return redirect("barang");
    }

    public function delete(Request $request, $id)
    {
        $model = Barang::where('id', $id)->first();
        
        try {
            $model->delete();
        } catch (Exception $e) {
            session()->flash('warning', $e->getMessage());
            return redirect("barang");
        }

        session()->flash('success', 'Berhasil menghapus barang');
        return redirect("barang");
    }
}
