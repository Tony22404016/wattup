<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Tokopedia</title>
    <style>
        /* Reset dan variabel warna */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary-green: #42b549;
            --dark-green: #2d8c3c;
            --light-green: #e7f4e8;
            --white: #ffffff;
            --gray-light: #f5f5f5;
            --gray-medium: #e0e0e0;
            --gray-dark: #9e9e9e;
            --text-dark: #333333;
        }
        
        body {
            background-color: var(--white);
            color: var(--text-dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Layout produk */
        .product-container {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 30px;
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        
        /* Bagian gambar produk */
        .product-image {
            flex: 1;
            min-width: 300px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--gray-light);
        }
        
        .product-image img {
            max-width: 100%;
            max-height: 400px;
            object-fit: contain;
        }
        
        /* Bagian informasi produk */
        .product-info {
            flex: 1;
            min-width: 300px;
            padding: 20px;
            border-left: 1px solid var(--gray-medium);
        }
        
        .product-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-dark);
        }
        
        .product-price {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 15px;
        }
        
        .product-rating {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .stars {
            color: #ffc107;
            margin-right: 8px;
        }
        
        .review-count {
            color: var(--gray-dark);
            font-size: 14px;
        }
        
        .product-stock {
            margin-bottom: 15px;
            font-size: 16px;
        }
        
        .stock-available {
            color: var(--primary-green);
            font-weight: 600;
        }
        
        .shipping-location {
            margin-bottom: 20px;
            font-size: 14px;
            color: var(--gray-dark);
        }
        
        .buy-button {
            background-color: var(--primary-green);
            color: var(--white);
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            max-width: 300px;
        }
        
        .buy-button:hover {
            background-color: var(--dark-green);
        }
        
        /* Bagian deskripsi produk */
        .product-description {
            margin-top: 30px;
            padding: 20px;
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .description-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-dark);
        }
        
        .description-content {
            line-height: 1.8;
            color: var(--text-dark);
        }
        
        /* Responsif untuk perangkat mobile */
        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
            }
            
            .product-info {
                border-left: none;
                border-top: 1px solid var(--gray-medium);
            }
            
            .product-image, .product-info {
                min-width: 100%;
            }
            
            .buy-button {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-container">
            <!-- Bagian gambar produk -->
            <div class="product-image">
                <img src="{{ asset('uploads/product/' . $product->product_image) }}" alt="Gambar Produk">
            </div>
            
            <!-- Bagian informasi produk -->
            <div class="product-info">
                <h1 class="product-title">{{$product->product_name}}</h1>
                <div class="product-price">Rp {{ number_format($product->product_price, 0, ',' ,'.') }}</div>
                
                <div class="product-rating">
                    <div class="stars">★★★★★</div>
                    <div class="review-count">(4.9/5 dari 1.245 ulasan)</div>
                </div>
                
                <div class="product-stock">
                    Stok: <span class="stock-available">Tersedia {{$product->product_stock}} buah</span>
                </div>
                
                <div class="shipping-location">
                    Dikirim dari: <strong>{{$product->product_location}}</strong>
                </div>
                
                <a href="{{ route('checkout.form', $product->product_id) }}"><button class="buy-button">Beli Sekarang</button></a>
            </div>
        </div>
        
        <!-- Bagian deskripsi produk -->
        <div class="product-description">
            <h2 class="description-title">Deskripsi Produk</h2>
            <div class="description-content">
                <p>{{$product->product_description}}</p>
                <p>Dapatkan garansi resmi 2 tahun dan gratis pengiriman ke seluruh Indonesia untuk pembelian hari ini.</p>
            </div>
        </div>
    </div>
</body>
</html>