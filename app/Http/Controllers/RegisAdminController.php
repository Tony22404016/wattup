<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Http\Request;

class RegisAdminController extends Controller
{
    //menampilkan form tambah user
    public function create(){
        return view('Admin_Login.AdminRegis');
    }

    //mengirim data user
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // simpan ke database (hash password dulu)
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // redirect kembali ke halaman home
        return redirect(route('user.index'));
    }
}
