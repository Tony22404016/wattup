<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Regis;
use Illuminate\Http\Request;

class RegisController extends Controller
{

    public function create(){
        return view('Sign_Up');
    }

    public function store(Request $request)
    {
    // validasi input
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    // simpan ke database (hash password dulu)
    Regis::create([
        'username' => $request->username,
        'password' => Hash::make($request->password),
    ]);

    // redirect kembali ke halaman home
    return view('Home');
    }
}
