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
                <p>{{$activeUser}}</p>
            </div>
            <div class="stat-card">
                <h3>Non-active User</h3>
                <p>{{$nonactiveuser}}</p>
            </div>
        </div>
        
        <div class="action-bar">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search users..." id="searchInput" oninput="dataFilter()">
            </div>
            <a href="/regis" style="text-decoration: none;">
                <button class="btn btn-add">
                    <i class="fas fa-plus"></i> Add User
                </button>
            </a>
        </div>
        
        <div class="table-container">
            <table id="productTable" >
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
                        <td><span class="UserStatus-badge {{ $user->status == 'active' ? 'UserStatus-active' : 'UserStatus-nonactive' }}">{{ $user->status }}</span></td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td class="action-buttons">
                            <a href="{{route('user.edit', $user->user_id)}}"><button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button></a>
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
    @endsection

    <script src="Admin_pannel.js"></script>
</body>
</html>