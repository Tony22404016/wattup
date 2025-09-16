<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Tokopedia Style</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Check_Out.css">
</head>
<body>
    <div class="container">
        <section class="checkout-section">
            <div class="image-container">
                <img src="asset/Check_Out.png" alt="Ilustrasi Checkout">
            </div>
            <div class="form-container">
                <h2 class="form-title">Checkout Pesanan</h2>
                <form id="checkout-form">
                    <div class="form-group">
                        <label for="customer-name">Nama Customer</label>
                        <input type="text" id="customer-name" placeholder="Masukkan nama lengkap" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="product-name">Nama Produk</label>
                        <select id="product-name" required>
                            <option value="">Pilih produk</option>
                            <option value="laptop">Laptop Gaming - Rp 12.500.000</option>
                            <option value="smartphone">Smartphone Flagship - Rp 8.999.000</option>
                            <option value="headphone">Headphone Wireless - Rp 1.499.000</option>
                            <option value="keyboard">Mechanical Keyboard - Rp 899.000</option>
                            <option value="monitor">Monitor 27 inch - Rp 3.750.000</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Alamat Rumah</label>
                        <input type="text" id="address" placeholder="Masukkan alamat lengkap" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="date">Tanggal Pengiriman</label>
                        <input type="date" id="date" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="whatsapp">Nomor WhatsApp</label>
                        <input type="tel" id="whatsapp" placeholder="Contoh: 081234567890" required>
                    </div>
                    
                    <button type="submit" class="btn-checkout">Proses Checkout</button>
                </form>
            </div>
        </section>
    </div>

    <script>
        // Set tanggal minimum ke hari ini
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date').setAttribute('min', today);
        
        // Validasi form
        document.getElementById('checkout-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Pesanan berhasil diproses! Terima kasih telah berbelanja.');
        });
    </script>
</body>
</html>