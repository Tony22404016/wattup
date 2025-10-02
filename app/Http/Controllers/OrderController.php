<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        $Orders = Orders::with(['user', 'product'])->get();
        $totalOrder = Orders::count();
        $on_prosess = Orders::where('status', 'diproses')->count();
        $finish = Orders::where('status', 'selesai')->count();

        return view('Admin_Pannel.Admin_Pannel1', [
            'Orders' => $Orders,
            'totalOrder' => $totalOrder,
            'on_prosess' => $on_prosess,
            'finish' => $finish
        ]);
    }

    public function create($id)
    {
        $product = Product::find($id);
        return view('Checkout', compact('product')); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id'      => 'required|exists:products,product_id',
            'home_address'    => 'required|string|max:255',
            'date'            => 'required|date',
            'whatsapp_number' => 'required|string|max:15',
        ]);

        // otomatis ambil user login
        $validated['user_id'] = auth()->id(); 

        Orders::create($validated);

        return redirect()->route('checkout.form', ['id' => $validated['product_id']])
                 ->with('success', 'Pesanan berhasil dibuat!');
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

    public function destroy($id)
    {
        Orders::find($id)->delete();
        return redirect()->route('order.index');
    }


}
