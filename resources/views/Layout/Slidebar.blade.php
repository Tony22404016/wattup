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
                <a href="/orders" style="text-decoration: none; color:#333"><span>Dashboard</span></a>
            </div>
            <div class="menu-item">
                <i class="fas fa-shopping-cart"></i>
                <a href="/orders" style="text-decoration: none; color:#333"><span>Orders</span></a>
            </div>
            <div class="menu-item">
                <i class="fas fa-users"></i>
                <a href="/users" style="text-decoration: none; color:#333"><span>Users</span></a>
            </div>
            <div class="menu-item">
                <i class="fas fa-box"></i>
                <a href="/product" style="text-decoration: none; color:#333"><span>Product</span></a>
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

    @yield('container')