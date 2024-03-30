<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::with('level')->get();
        return view('user.index', ['data' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => 'required',
            'nama' => 'required|string',
            'password' => 'required|min:8',
        ]);

        // Proses penyimpanan user ke dalam database bisa ditambahkan di sini

        return redirect()->route('user.index')->with('success', 'User berhasil dibuat!');
    }
}
