<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    public function index()
    {
        $Orders = Orders::all(); //Ambil semua data dari model Monitor
        $totalOrder = Orders::count();
        $on_prosess = Orders::where('status', 'diproses')->count();
        $finish = Orders::where('status', 'selesai')->count();
        return view('Admin_Pannel.Admin_Pannel1', ['Orders'=>$Orders,'totalOrder'=>$totalOrder, 'on_prosess'  => $on_prosess, 'finish'  => $finish]);
    }

    //menampilkan form tambah user
    public function create(){
        return view('Checkout');
    }

    //mengirim data order
    public function store(Request $request)
    {
       $validated = $request->validate([
        'customer_name'   => 'required|string|max:255',
        'product_name'    => 'required|string|max:255',
        'home_address'    => 'required|string',
        'date'            => 'required|date',
        'whatsapp_number' => 'required|string',
    ]);

        // simpan ke database (hash password dulu)
        Orders::create($validated);

        // redirect kembali ke halaman home
        return redirect()->route('checkout.form')->with('success', 'Pesanan berhasil dibuat!');
    }

    //menampilkan form update status user
    public function edit($id)
    {
        $order = Orders::find($id);
        return view('Update.Update_Order', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status'=>'required',
        ]);

        Orders::find($id)->update($request->all());
        return redirect()->route('order.index'); //Arahkan ulang (redirect) pengguna ke URL barang.index".
    }


}
