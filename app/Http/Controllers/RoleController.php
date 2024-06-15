<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function create()
    {

        // Retrieve all users
    $users = User::all();

    // Pass users data to the view
    return view('addRole.addRole', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string'
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->save();

        return redirect()->route('roles.create')->with('success', 'User role has been created successfully.');
    }

    public function index()
    {
        // Retrieve all users
        $users = User::all();

        // Pass users data to the view
        return view('role.index', compact('users'));
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);
        
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User has been deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }

}
