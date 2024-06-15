<!-- resources/views/sesi/index.blade.php -->

@extends('layout.template')

@section('content')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>

        <!-- Tampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        
        <!-- Tambahkan link untuk redirect ke halaman register -->
        <div class="mt-3">
            <p>Belum daftar? <a href="/sesi/register">Register</a></p>
        </div>
    </div>
@endsection
