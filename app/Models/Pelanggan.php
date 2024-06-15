<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nomor_telepon', 'email', 'sandi', 'metode_pembayaran', 'no_transaksi','nama_pesanan',
    ];
}
