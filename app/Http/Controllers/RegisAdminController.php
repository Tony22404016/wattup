<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Http\Request;

class RegisAdminController extends Controller
{

    public function index()
    {
        $admins = Admin::all(); //Ambil semua data dari model Monitor
        $totalAdmin = Admin::count();
        
        return view('Admin_Pannel.Admin_Pannel4', [
            'admins'=>$admins,
            'totalAdmin'=>$totalAdmin
        ]);
    }

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

    public function destroy($id)
    {
        Admin::find($id)->delete();
        return redirect()->route('admin.index');
    }
}
