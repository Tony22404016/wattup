<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $product_count = Product::count();
        $inStock = Product::where('product_stock', '>=', 1)->count();
        $outStock = Product::where('product_stock', '<=', 1)->count();
        return view('Admin_Pannel.Admin_Pannel2', ['products'=>$products, 'product_count'=>$product_count, 'instock'=>$inStock, 'outstock'=>$outStock ]);
    }


    public function home()
    {
        $products = Product::all(); //Ambil semua data dari model Monitor
        return view('Home', ['products'=>$products]);
    }

    public function create (){
        return view('Add_Product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'product_location' => 'required', // kalau VARCHAR
        ]);

        $fileName = time() . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('uploads/product'), $fileName);

        // Simpan ke database harus kaya gini biar gambarnya jalan
        Product::create([
            'product_image'     => $fileName, // simpan nama file, bukan object
            'product_name'      => $request->product_name,
            'product_price'     => $request->product_price,
            'product_stock'     => $request->product_stock,
            'product_location'  => $request->product_location, 
        ]);

        return redirect()->route('product.index')->with('success', 'Project berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('Update.Update_Product', compact('product'));
    }

    // Menyimpan perubahan produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validasi input
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric',
            'product_stock' => 'required|integer',
            'product_location' => 'required|string|max:255',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        // Update field text
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_stock = $request->product_stock;
        $product->product_location = $request->product_location;

        // Update gambar jika ada
        if ($request->hasFile('product_image')) {
            // Hapus gambar lama kalau ada
            if ($product->product_image && Storage::exists($product->product_image)) {
                Storage::delete($product->product_image);
            }
            // Simpan gambar baru
            $path = $request->file('product_image')->store('public/products');
            $product->product_image = $path;
        }

        $product->save();

        return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index');
    }
}
