<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status User - Tokopedia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            overflow: hidden;
        }
        
        .header {
            background-color: #42b549;
            color: white;
            padding: 25px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 24px;
            font-weight: 600;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .user-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #e0f6e1;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #42b549;
            font-size: 28px;
            font-weight: bold;
        }
        
        .user-details {
            flex: 1;
        }
        
        .user-name {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        
        .user-email {
            color: #777;
            font-size: 14px;
        }
        
        .form-container {
            padding: 25px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: #333;
        }
        
        .status-dropdown {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2342b549' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
            cursor: pointer;
        }
        
        .status-dropdown:focus {
            outline: none;
            border-color: #42b549;
            box-shadow: 0 0 0 2px rgba(66, 181, 73, 0.2);
        }
        
        .btn-update {
            background-color: #42b549;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .btn-update:hover {
            background-color: #3aa142;
        }
        
        .status-indicator {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            margin-left: 10px;
        }
        
        .status-active {
            background-color: #e0f6e1;
            color: #2e7d32;
        }
        
        .status-nonactive {
            background-color: #ffebee;
            color: #c62828;
        }
        
        .success-message {
            background-color: #e0f6e1;
            color: #2e7d32;
            padding: 12px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Update Status User</h1>
        </div>
        
        <div class="user-info">
            <div class="user-avatar">U</div>
            <div class="user-details">
                <div class="user-name">User Wattup</div>
                <div class="user-email">{{ $order->customer_name }}</div>
            </div>
        </div>
        
        <div class="form-container">
            <form action="{{ route('order.update', $order->order_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="status">Status User</label>
                    <select id="status" name="status" class="status-dropdown">
                        <option value="diprosess">diporses</option>
                        <option value="selesai">selesai</option>
                        <option value="dibatalkan">dibatalkan</option>
                    </select>
                </div>
                
                <button type="submit" class="btn-update">Update Status</button>
            </form>
        </div>
    </div>

    <script>
        // JavaScript minimal untuk indikator status
        document.addEventListener('DOMContentLoaded', function() {
            const statusDropdown = document.getElementById('status');
            
            // Tambahkan event listener untuk perubahan status
            statusDropdown.addEventListener('change', function() {
                // Di Laravel, ini akan dikirim melalui form
                console.log('Status dipilih:', this.value);
            });
        });
    </script>
</body>
</html>