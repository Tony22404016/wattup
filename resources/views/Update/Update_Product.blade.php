<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Produk</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f9f5;
            color: #2d4a2d;
            line-height: 1.6;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            border-bottom: 2px solid #4caf50;
        }
        
        h1 {
            color: #2d4a2d;
            font-size: 2.2rem;
        }
        
        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2d4a2d;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #c8e6c9;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #4caf50;
            box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.2);
        }
        
        .image-preview {
            width: 150px;
            height: 150px;
            border: 2px dashed #c8e6c9;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            overflow: hidden;
        }
        
        .image-preview img {
            max-width: 100%;
            max-height: 100%;
            display: none;
        }
        
        .image-preview span {
            color: #81c784;
            font-size: 14px;
        }
        
        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        button {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            flex: 1;
        }
        
        .btn-update {
            background-color: #4caf50;
            color: white;
        }
        
        .btn-update:hover {
            background-color: #3d8b40;
        }
        
        .btn-cancel {
            background-color: #f5f5f5;
            color: #2d4a2d;
            border: 1px solid #c8e6c9;
        }
        
        .btn-cancel:hover {
            background-color: #e8f5e9;
        }
        
        .success-message {
            background-color: #e8f5e9;
            color: #2d4a2d;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            display: none;
        }
        
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }
            
            .form-container {
                padding: 20px;
            }
            
            .btn-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Update Data Produk</h1>
        </header>
        
        <div class="form-container">
            <form action="{{ route('product.update', $product->product_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="product_image">Gambar Produk</label>
                    <input type="file" id="product_image" accept="image/*">
                    @if($product->product_image)
                        <img src="{{ Storage::url($product->product_image) }}" alt="Gambar Produk" width="100">
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="product_name">Nama Produk</label>
                    <input type="text" name="product_name" id="product_name" placeholder="Masukkan nama produk" value="{{ old('product_name', $product->product_name) }}" required >
                </div>
                
                <div class="form-group">
                    <label for="product_price">Harga Produk (Rp)</label>
                    <input type="number" name="product_price" id="product_price" placeholder="Masukkan harga produk" min="0" value="{{ old('product_price', $product->product_price) }}" required>
                </div>
                
                <div class="form-group">
                    <label for="product_stock">Stok Produk</label>
                    <input type="number" name="product_stock" id="product_stock" placeholder="Masukkan jumlah stok" min="0" value="{{ old('product_stock', $product->product_stock) }}" required>
                </div>
                
                <div class="form-group">
                    <label for="product_location">Lokasi Produk</label>
                    <select id="product_location" name="product_location" required>
                        <option value="">Pilih lokasi produk</option>
                        <option value="Banjarmasin">Banjarmasin</option>
                        <option value="Banjarbaru">Banjarbaru</option>
                        <option value="Kapuas">Kapuas</option>
                        <option value="Marabahan">Marabahan</option>
                        <option value="Palangkaraya">Palangkaraya</option>
                    </select>
                </div>
                
                <div class="btn-group">
                    <button type="submit" class="btn-update">Update Produk</button>
                    <button type="button" class="btn-cancel" onclick="resetForm()">Batal</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>