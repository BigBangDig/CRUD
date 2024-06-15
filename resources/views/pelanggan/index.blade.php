@extends('layout.template')

@section('content')
<div class="container my-5">
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-4">&larr; Kembali</a>
    <h1 class="text-center text-dark mb-4">Data Pelanggan</h1>
    <div class="row mb-4">
        <div class="col-md-6">
            <form action="{{ route('pelanggan.index') }}" method="GET">
                <div class="input-group">
                    <input type="date" name="tanggal" class="form-control">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive shadow-sm rounded">
        <table class="table table-striped table-hover" id="pelanggan-table">
            <thead class="table-dark">
                <tr>
                    <th>No. Transaksi</th> <!-- Kolom baru -->
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Timestamp</th>
                    <th>Metode Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pelanggans as $pelanggan)
                    <tr data-id="{{ $pelanggan->id }}"> <!-- Tambahkan atribut data-id untuk menyimpan ID pelanggan -->
                        <td>{{ $pelanggan->no_transaksi }}</td> <!-- Tampilkan no transaksi -->
                        <td>{{ $pelanggan->nama }}</td>
                        <td>{{ $pelanggan->email }}</td>
                        <td>{{ $pelanggan->nomor_telepon }}</td>
                        <td>{{ $pelanggan->created_at }}</td>
                        <td>{{ $pelanggan->metode_pembayaran }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap 5 JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript untuk menangani klik pada baris tabel -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil referensi ke tabel
        const table = document.getElementById('pelanggan-table');

        // Tambahkan event listener untuk menangani klik pada baris tabel
        table.addEventListener('click', function(event) {
            // Periksa apakah yang diklik adalah baris tabel
            if (event.target.tagName === 'TD') {
                // Ambil ID pelanggan dari atribut data-id pada baris tabel
                const pelangganId = event.target.parentElement.dataset.id;

                // Redirect ke halaman detail pemesanan dengan menyertakan ID pelanggan
                window.location.href = `/detail_pemesanan/${pelangganId}`;
            }
        });
    });
</script>
@endsection
