<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel WattUp</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Admin_Pannel.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    @extends('Layout.Slidebar')
    @section('container')
    <!-- Main Content Section -->
    <div class="main-content">
        <div class="header">
            <h1 class="page-title">
                <i class="fas fa-shopping-cart"></i>
                Orders Management
            </h1>
            <div class="user-info">
                <span class="admin-name">{{ session('username') }}</span>
                <div class="user-avatar">
                    {{ substr(session('username'), 0, 1) }}
                </div>
            </div>
        </div>
        
        <div class="stats-container">
            <div class="stat-card">
                <h3>Product Quantity</h3>
                <p>{{$product_count}}</p>
            </div>
            <div class="stat-card">
                <h3>Products In Stock</h3>
                <p>{{$instock}}</p>
            </div>
            <div class="stat-card">
                <h3>Products Out of Stock</h3>
                <p>{{$outstock}}</p>
            </div>
        </div>
        
        <div class="action-bar">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search Product..." id="searchInput" oninput="dataFilter()">
            </div>
            <a href="/addProduct" style="text-decoration: none;">
                <button class="btn btn-add">
                    <i class="fas fa-plus"></i> Add Product
                </button>
            </a>
        </div>
        
        <div class="table-container">
            <table id="productTable">
                <thead>
                    <tr>
                        <th>Product_ID</th>
                        <th>Product_Image</th>
                        <th>Product_Name</th>
                        <th>Product_Price</th>
                        <th>Product_Stock</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product )
                    <tr>
                        <td>{{$product->product_id}}</td>
                        <td>
                            <img class="h-10 w-10 rounded-full" src="{{ asset('uploads/product/' . $product->product_image) }}" alt="Product Image">
                        </td>
                        <td>{{$product->product_name}}</td>
                        <td>Rp{{ number_format($product->product_price, 0, ',' ,'.')}}</td>
                        <td>{{$product->product_stock}}</td>
                        <td>{{$product->product_location}}</td>
                        <td>
                            <a href="{{route('product.edit', $product->product_id)}}"><button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button></a>
                            <form action="{{route('product.destroy',$product->product_id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-delete" onclick = "return confirm('Yakin hapus?')"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

    <script src="Admin_pannel.js"></script>
</body>
</html>