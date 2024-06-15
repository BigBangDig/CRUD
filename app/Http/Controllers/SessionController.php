<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view('sesi/index');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email harus valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 5 karakter'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect('ecommers');
            } elseif (Auth::user()->role == 'user') {
                return redirect('welcome');
            }
        } else {
            return redirect('sesi')->withErrors('Username dan Password yang dimasukan tidak sesuai!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Anda Berhasil Logout!');
    }

    public function register()
    {
        return view('sesi/register');
    }

    public function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ], [
            'name.required' => 'Username Wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Silakan masukan email yang valid!',
            'email.unique' => 'Email Sudah Pernah digunakan!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Minimum Password yang diizinkan adalah 5 Karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ];

        User::create($data);

        return redirect('sesi')->with('success', 'Registrasi berhasil. Silakan login!');
    }
}
