<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public $timestamps = false;

    public function barang()
    {
        return $this->hasOne('App\Models\Barang', 'id', 'id_barang');
    }
}
