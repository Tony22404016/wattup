<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Regis;
use Illuminate\Http\Request;

class RegisController extends Controller
{
    //menampilkan data user
    public function index()
    {
        $users = Regis::all(); //Ambil semua data dari model Monitor
        $totalUser = Regis::count();
        $activeUser = Regis::where('status', 'active')->count();
        return view('Admin_Pannel.Admin_Pannel3', [
            'users'=>$users,
            'totalUser'=>$totalUser,
            'activeUser'=>$activeUser
        ]);
    }

    //menampilkan form tambah user
    public function create(){
        return view('Sign_Up');
    }

    //mengirim data user
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
        return view('Login');
    }

    //menghapus data pesanan
    public function destroy($id)
    {
        Regis::find($id)->delete();
        return redirect()->route('user.index');
    }

    //menampilkan form update status user
    public function edit($id)
    {
        $user = Regis::find($id);
        return view('Update.Update_User', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status'=>'required',
        ]);

        Regis::find($id)->update($request->all());
        return redirect()->route('user.index'); //Arahkan ulang (redirect) pengguna ke URL barang.index".
    }
}
