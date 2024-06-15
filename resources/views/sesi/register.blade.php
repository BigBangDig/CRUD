@extends('layout/template')

@section('content')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Register</h1>   
        <form action="/sesi/create" method="POST">
            @csrf <!-- Tambahkan ini untuk melindungi formulir dari serangan CSRF -->
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" value="{{Session::get('name')}}" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{Session::get('email')}}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            @if(Auth::check() && Auth::user()->role == 'user')
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" class="form-control">
                    <option value="user">User</option>
                </select>
            </div>
        @endif
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </div>
        </form> 
    </div>   
@endsection
