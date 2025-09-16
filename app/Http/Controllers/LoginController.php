<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //menampilkan form login
    public function showLoginForm(){
        return view('Login');
    }

    //login logic
    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        //cek ke tabel users(tanpa hash)
        $user = DB::table('users')
        // cari user berdasarkan username
            ->where('username',$username)
            ->first();

        // cek apakah user ada & password sesuai
        if ($user && Hash::check($password, $user->password)) {

            //simpan session login buat sambutan ke user
            $request->session()->put('username', $user->username);

            //jika username dan hash password cocok maka masuk ke halaman user.index
            return redirect()->route('user.index');
        }else{
            return redirect()->route('login')->with('error', 'Username atau password salah');
        }
    }
}
