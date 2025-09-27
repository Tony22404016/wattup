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

                <form action="{{route('checkout.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="customer_name">Nama Customer</label>
                        <input type="text" name="customer_name" placeholder="Masukkan nama lengkap" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="product-name">Nama Produk</label>
                        <select name="product_name" required>
                            <option value="">Pilih produk</option>
                        @foreach ($products as $product)
                            <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                        @endforeach  
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Alamat Rumah</label>
                        <input type="text" name="home_address" placeholder="Masukkan alamat lengkap" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="date">Tanggal Pengiriman</label>
                        <input type="date" name="date" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="whatsapp">Nomor WhatsApp</label>
                        <input type="tel" name="whatsapp_number" placeholder="Contoh: 6281234567890" required>
                    </div>
                    
                    <button type="submit" class="btn-checkout">Proses Checkout</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>