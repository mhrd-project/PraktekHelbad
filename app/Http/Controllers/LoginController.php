<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;
use App\Models\Transaksi;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $model = User::where('username', $username);

        if($model->first()){
            $model = $model->where('password', $password)->first();

            if($model){
                return redirect('dashboard');
            }
            else{
                session()->flash('warning', 'Password salah');
                return redirect('/');
            }
        }else{
            session()->flash('warning', 'Username salah');
            return redirect('/');
        }
    }

    public function dashboard()
    {
        $barang = Barang::count();
        $stok   = Barang::sum('stok');
        $pembelian = Transaksi::where('kategori', 'pembelian')->count();
        $penjualan = Transaksi::where('kategori', 'penjualan')->count();

        $data   = (object) [
            'barang' => $barang,
            'stok'   => $stok,
            'pembelian' => $pembelian,
            'penjualan' => $penjualan
        ];

        return view('dashboard', compact('data'));
    }
}
