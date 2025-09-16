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
    <div class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Sidebar Section -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="logo">W</div>
            <h2>WattUp Admin</h2>
            <p class="admin-name"><i class="fas fa-user-circle"></i> {{ session('username') }}</p>
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
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </div>
            <div class="menu-item">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
        <div class="header">
            <h1 class="page-title">
                <i class="fas fa-users"></i>
                User Management
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
                <h3>Total Users</h3>
                <p>{{$totalUser}}</p>
            </div>
            <div class="stat-card">
                <h3>Active Users</h3>
                <p>1,248</p>
            </div>
            <div class="stat-card">
                <h3>New Users (30d)</h3>
                <p>327</p>
            </div>
        </div>
        
        <div class="action-bar">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search users...">
            </div>
            <a href="/regis" style="text-decoration: none;">
                <button class="btn btn-add">
                    <i class="fas fa-plus"></i> Add User
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
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->user_id}}</td>
                        <td>{{$user->username}}</td>
                        <td>••••••••</td>
                        <td><span class="status-badge status-active">Active</span></td>
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

    <script>
        // Toggle sidebar on mobile
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });

        // Menu item active state
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                
                // Close sidebar on mobile after selection
                if (window.innerWidth <= 576) {
                    document.getElementById('sidebar').classList.remove('show');
                }
            });
        });
        
        // Card hover effect
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-5px)';
                card.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.1)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = 'var(--shadow)';
            });
        });

        // Search functionality
        const searchInput = document.querySelector('.search-box input');
        searchInput.addEventListener('keyup', function() {
            const searchText = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const username = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const userId = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                
                if (username.includes(searchText) || userId.includes(searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>