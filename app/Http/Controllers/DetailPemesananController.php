<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DetailPemesananController extends Controller
{
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('detail_pemesanan', compact('pelanggan'));
    }
}
