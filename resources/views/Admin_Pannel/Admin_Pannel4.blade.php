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
                Admin Management
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
                <h3>Total Admins</h3>
                <p>{{$totalAdmin}}</p>
            </div>
        </div>
        
        <div class="action-bar">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search users..." id="searchInput" oninput="dataFilter()">
            </div>
        </div>
        
        <div class="table-container">
            <table id="productTable" >
                <thead>
                    <tr>
                        <th>Admin_ID</th>
                        <th>Admin_name</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->name}}</td>
                        <td>••••••••</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{$admin->created_at}}</td>
                        <td>{{$admin->updated_at}}</td>
                        <td class="action-buttons">
                            {{--<a href="{{route('user.edit', $user->user_id)}}"><button class="btn btn-edit"><i class="fas fa-edit"></i> Edit</button></a>--}}
                            <form action="{{route('admin.destroy',$admin->id)}}" method="POST">
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