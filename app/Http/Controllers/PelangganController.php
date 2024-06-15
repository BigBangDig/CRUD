<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'sandi' => 'required|string|min:6',
            'metode_pembayaran' => 'required|string', // Validasi untuk metode_pembayaran
        ]);

        // Menambahkan metode_pembayaran ke dalam data yang disimpan
        $validatedData['metode_pembayaran'] = $request->input('metode_pembayaran');

        $pelanggan = Pelanggan::create($validatedData);

        return response()->json($pelanggan, 201);
    }

    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggans'));
    }
}

