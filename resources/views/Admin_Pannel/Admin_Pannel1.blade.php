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
    <div class="admin-container">
        <!-- Sidebar Section -->
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">T</div>
                <h2>WattUp Admin</h2>
            </div>
            <div class="sidebar-menu">
                <div class="menu-item active">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Order</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Client</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-box"></i>
                    <span>Product</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </div>
            </div>
        </div>

        <!-- Data Section -->
        <div class="data-section">
            <h1 class="page-title">
                <i class="fas fa-list"></i>
                Orders
            </h1>
            
            <div class="card">
                <h3>Total Order</h3>
                <p>100</p>
            </div>

            <div class="add-order-container">
                <button class="btn btn-add">
                    <i class="fas fa-plus"></i> Add Order
                </button>
            </div>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID_Order</th>
                            <th>Customer_Name</th>
                            <th>Product_Name</th>
                            <th>Home_Address</th>
                            <th>Date</th>
                            <th>WhatsApp_Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TP-098765</td>
                            <td>Budi Santoso</td>
                            <td>Smartphone XYZ</td>
                            <td>Jl. Merdeka No. 123, Jakarta</td>
                            <td>12/08/2023</td>
                            <td>081234567890</td>
                            <td><span class="status status-processing">Processing</span></td>
                            <td class="action-buttons">
                                <button class="btn btn-call"><i class="fas fa-phone"></i> Call</button>
                                <button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-delete"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>TP-098764</td>
                            <td>Siti Rahayu</td>
                            <td>Laptop ABC</td>
                            <td>Jl. Sudirman No. 45, Bandung</td>
                            <td>11/08/2023</td>
                            <td>081987654321</td>
                            <td><span class="status status-shipped">Shipped</span></td>
                            <td class="action-buttons">
                                <button class="btn btn-call"><i class="fas fa-phone"></i> Call</button>
                                <button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-delete"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>TP-098763</td>
                            <td>Agus Prasetyo</td>
                            <td>Headphone Wireless</td>
                            <td>Jl. Gatot Subroto No. 78, Surabaya</td>
                            <td>10/08/2023</td>
                            <td>082123456789</td>
                            <td><span class="status status-delivered">Delivered</span></td>
                            <td class="action-buttons">
                                <button class="btn btn-call"><i class="fas fa-phone"></i> Call</button>
                                <button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-delete"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>TP-098762</td>
                            <td>Dewi Anggraini</td>
                            <td>Smart Watch</td>
                            <td>Jl. Thamrin No. 56, Yogyakarta</td>
                            <td>09/08/2023</td>
                            <td>081555444333</td>
                            <td><span class="status status-processing">Processing</span></td>
                            <td class="action-buttons">
                                <button class="btn btn-call"><i class="fas fa-phone"></i> Call</button>
                                <button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-delete"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>TP-098761</td>
                            <td>Rudi Hermawan</td>
                            <td>Power Bank 20000mAh</td>
                            <td>Jl. Asia Afrika No. 89, Bogor</td>
                            <td>08/08/2023</td>
                            <td>081999888777</td>
                            <td><span class="status status-shipped">Shipped</span></td>
                            <td class="action-buttons">
                                <button class="btn btn-call"><i class="fas fa-phone"></i> Call</button>
                                <button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-delete"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Menambahkan efek interaktif pada menu item
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
        
        // Menambahkan efek hover pada card
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.12)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.08)';
            });
        });
    </script>
</body>
</html>