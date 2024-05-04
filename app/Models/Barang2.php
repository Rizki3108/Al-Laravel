<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang2 extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_barang2s', 'harga', 'stok'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
