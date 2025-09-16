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
                <h3>Total User</h3>
                <p>{{$totalUser}}</p>
            </div>

            <div class="add-order-container">
                <a href="/regis" style="text-decoration: none;">
                    <button class="btn btn-add">
                        <i class="fas fa-plus"></i> Add user
                    </button>
                </a>
            </div>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>User_ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Create_at</th>
                            <th>Update_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->user_id}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button>
                                <form action="{{route('user.destroy',$user->user_id)}}" method="POST">
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