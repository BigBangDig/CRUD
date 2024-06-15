@extends('layout.template')

@section('content')
<div class="container my-5">
    <h1 class="text-center text-dark mb-4">Detail Pemesanan</h1>
    <div class="card shadow-sm rounded">
        <div class="card-body">
            <h5 class="card-title">{{ $pelanggan->nama }}</h5>
            <p class="card-text">Email: {{ $pelanggan->email }}</p>
            <p class="card-text">Telepon: {{ $pelanggan->nomor_telepon }}</p>
            <!-- Tampilkan informasi pemesanan lainnya sesuai kebutuhan -->

            <!-- Iterasi foreach untuk menampilkan daftar makanan yang dipesan -->
            <h6 class="mt-4">Makanan yang dipesan:</h6>
            <ul class="list-group">
                @foreach($pelanggan->pemesanan as $pemesanan)
                    <li class="list-group-item">{{ $pemesanan->nama_makanan }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
