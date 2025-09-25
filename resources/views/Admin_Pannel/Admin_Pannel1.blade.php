<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel WattUp</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Admin_Pannel.css">
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
                <h3>Total Orders</h3>
                <p>{{$totalOrder}}</p>
            </div>
            <div class="stat-card">
                <h3>Onprosess Orders</h3>
                <p>{{$on_prosess}}</p>
            </div>
            <div class="stat-card">
                <h3>Finish Orders</h3>
                <p>{{$finish}}</p>
            </div>
        </div>
        
        <div class="action-bar">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search orders..." id="searchInput" oninput="dataFilter()">
            </div>
            <a href="/checkout" style="text-decoration: none;">
                <button class="btn btn-add">
                    <i class="fas fa-plus"></i> Add Orders
                </button>
            </a>
        </div>
        
        <div class="table-container">
            <table id="productTable">
                <thead>
                    <tr>
                        <th>Orders_ID</th>
                        <th>Customer_Name</th>
                        <th>Product_Name</th>
                        <th>Home_Address</th>
                        <th>Date</th>
                        <th>Whatsapp_Nummber</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Orders as $order )
                    <tr>
                        <td>{{$order->order_id}}</td>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->product_name}}</td>
                        <td>{{$order->home_address}}</td>
                        <td>{{$order->date}}</td>
                        <td>{{$order->whatsapp_number}}</td>
                        <td><span>{{ $order->status }}</span></td>
                        <td>
                            <a href="{{route('order.edit', $order->order_id)}}"><button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button></a>
                            <form action="{{route('order.destroy',$order->order_id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-delete" onclick = "return confirm('Yakin hapus?')"><i class="fas fa-trash"></i> Delete</button>
                            </form></td>
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