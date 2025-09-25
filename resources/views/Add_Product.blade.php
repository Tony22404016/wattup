<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <link rel="stylesheet" href="Add_Product.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Tambah Produk Baru</h1>
        </div>
        
        <div class="form-container">
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="productImage">Gambar Produk</label>
                    <input type="file" name="product_image" id="productImage" class="form-control" accept="image/*">
                    <p class="input-hint">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                </div>
                
                <div class="form-group">
                    <label for="productName">Nama Produk</label>
                    <input type="text" name="product_name" id="productName" class="form-control" placeholder="Masukkan nama produk" value="{{ old('product_name') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="productPrice">Harga Produk</label>
                    <input type="number" name="product_price" id="productPrice" class="form-control" placeholder="Masukkan harga produk" min="0" step="0.01" value="{{ old('product_price') }}" required>
                </div>

                <div class="form-group">
                    <label for="productStock">Stok Produk</label>
                    <input type="number" name="product_stock" id="productStock" class="form-control" placeholder="Masukkan stok produk" min="0" value="{{ old('product_stock') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="city">Kota</label>
                    <select name="product_location" id="city" class="form-control" required>
                        <option value="">Pilih kota</option>
                        <option value="Banjarmasin">Banjarmasin</option>
                        <option value="Banjarbaru">Banjarbaru</option>
                        <option value="Barito Kuala">Barito Kuala</option>
                        <option value="Marabahan">Marabahan</option>
                        <option value="Kapuas">Kapuas</option>
                        <option value="Pulang Pisau">Pulang Pisau</option>
                        <option value="Palangkaraya">Palangkaraya</option>
                    </select>
                </div>
                <button type="submit" class="btn">Simpan Produk</button>
            </form>
        </div>
    </div>
</body>
</html>