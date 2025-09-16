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
            <form id="productForm">
                <div class="form-group">
                    <label for="productImage">Gambar Produk</label>
                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="Preview Gambar" id="preview">
                        <span id="previewText">Pratinjau gambar akan muncul di sini</span>
                    </div>
                    <input type="file" id="productImage" class="form-control" accept="image/*">
                    <p class="input-hint">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                </div>
                
                <div class="form-group">
                    <label for="productName">Nama Produk</label>
                    <input type="text" id="productName" class="form-control" placeholder="Masukkan nama produk" required>
                </div>
                
                <div class="form-group">
                    <label for="productPrice">Harga Produk</label>
                    <input type="number" id="productPrice" class="form-control" placeholder="Masukkan harga produk" min="0" required>
                </div>
                
                <div class="form-group">
                    <label for="city">Kota</label>
                    <select id="city" class="form-control" required>
                        <option value="">Pilih kota</option>
                        <option value="jakarta">Jakarta</option>
                        <option value="bandung">Bandung</option>
                        <option value="surabaya">Surabaya</option>
                        <option value="yogyakarta">Yogyakarta</option>
                        <option value="medan">Medan</option>
                        <option value="semarang">Semarang</option>
                        <option value="makassar">Makassar</option>
                        <option value="denpasar">Denpasar</option>
                    </select>
                </div>
                
                <button type="submit" class="btn">Simpan Produk</button>
            </form>
        </div>
    </div>

    <script>
        // JavaScript untuk preview gambar
        const productImage = document.getElementById('productImage');
        const preview = document.getElementById('preview');
        const previewText = document.getElementById('previewText');
        
        productImage.addEventListener('change', function() {
            const file = this.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                previewText.style.display = "none";
                preview.style.display = "block";
                
                reader.addEventListener("load", function() {
                    preview.setAttribute("src", this.result);
                });
                
                reader.readAsDataURL(file);
            } else {
                previewText.style.display = "block";
                preview.style.display = "none";
                preview.setAttribute("src", "");
            }
        });
        
        // Validasi form
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validasi sederhana
            const productName = document.getElementById('productName').value;
            const productPrice = document.getElementById('productPrice').value;
            const city = document.getElementById('city').value;
            
            if (!productName || !productPrice || !city) {
                alert('Harap isi semua field yang wajib diisi!');
                return;
            }
            
            // Jika validasi berhasil, tampilkan data di console
            const formData = {
                productImage: productImage.files[0] ? productImage.files[0].name : 'Tidak ada gambar',
                productName: productName,
                productPrice: productPrice,
                city: city
            };
            
            console.log('Data Produk:', formData);
            alert('Produk berhasil disimpan!');
            
            // Reset form setelah submit (opsional)
            this.reset();
            previewText.style.display = "block";
            preview.style.display = "none";
        });
    </script>
</body>
</html>