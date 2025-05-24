<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sign In - CAMPUS LOST & FOUND</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/assets/gradasi1.png'); /* Ganti dengan path gambarmu */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 100%;
            height: auto;
            justify-content: center;
            align-items: center;
            display: flex;
        }
        h2 {
            color:#0C3A2F;
        }
        .form-container {
            padding: 40px 40px;
            width: 400px;
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            padding: 13px;
            width: 350px;
            border-radius: 30px;
            border: none;
            margin-top: 15px;
            background: linear-gradient(90deg, #6E9775 0%, #0C3A2F 100%);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            color: #fff;
            outline: none;
        }
        input::placeholder {
            color: #ffffff8b;
            font-size: 13px;
        }
        input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(255,255,255,0.3);
        }
        .btn {
            margin-top: 15px;
            width: 120px;
            padding: 10px;
            border-radius: 20px;
            background: rgba(188, 139, 83, 1);
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #d35400;
        }
        .text-link {
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
            color: #0C3A2F;
        }
        .text-link a {
            color:#6E9775;
            text-decoration: none;
        }
        .error-text {
            color: red;
            font-size: 12px;
            text-align: left;
            width: 330px;
            margin-left: auto;
            margin-right: auto;
        }
        img {
            width: 500px;
            height: auto;
        }
    </style>
</head>
<body>
    <img src="assets/login.png">
    <div class="form-container">
        <h1>SIGN IN</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" placeholder="Masukkan Email Pengguna" required>
            @error('email')
                <div class="error-text">!!!{{ $message }}</div>
            @enderror

            <input type="password" name="password" placeholder="Masukkan Kata Sandi" required>
            @error('password')
                <div class="error-text">!!!{{ $message }}</div>
            @enderror

            <button type="submit" class="btn">SIGN IN</button>
        </form>
        <div class="text-link">
            Belum Punya Akun? <a href="{{ route('register') }}">Daftar disini</a>
        </div>
    </div>
</body>
</html>