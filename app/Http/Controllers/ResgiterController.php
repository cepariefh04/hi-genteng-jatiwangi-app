<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResgiterController extends Controller
{
    public function index()
    {
        return view('admin.register', [
            'title' => 'Resgiter'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('success', 'Registrasi Berhasil!, Silahkan Login.');

        return redirect('/login')->with('success', 'Registrasi Berhasil!, Silahkan Login.');
    }
}
