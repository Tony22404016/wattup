<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tokopedia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .login-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 30px;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .logo h1 {
            color: #42b549;
            font-size: 28px;
            font-weight: bold;
        }
        
        .login-form h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        .form-group input:focus {
            border-color: #42b549;
            outline: none;
        }
        
        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #42b549;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .login-button:hover {
            background-color: #3aa041;
        }
        
        .divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
            color: #999;
        }
        
        .divider::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background-color: #eee;
            z-index: 1;
        }
        
        .divider span {
            background-color: white;
            padding: 0 15px;
            position: relative;
            z-index: 2;
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
        
        .register-link a {
            color: #42b549;
            text-decoration: none;
            font-weight: 500;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #999;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <h1>Regis</h1>
        </div>
        
        <div class="login-form">
            <h2>Masuk ke Admin Pannel</h2>
            
            <form action="{{route('AdminRegister.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
                </div>
                
                <button type="submit" class="login-button">Daftar</button>
            </form>
            
            <div class="divider">
                <span>Atau</span>
            </div>
            
            <div class="register-link">
                Sudah punya akun? <a href="{{route('LoginAdmin')}}">Login di sini</a>
            </div>
        </div>
        
        <div class="footer">
            &copy; 2025 Wattup. Hak Cipta Dilindungi.
        </div>
    </div>
</body>
</html>