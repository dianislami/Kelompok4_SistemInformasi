<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - CAMPUS LOST & FOUND</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/assets/gradasi.png'); /* Ganti dengan path gambarmu */
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
    <div class="form-container">
        <h2>SIGN UP</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Buat Nama Pengguna" value="{{ old('nama') }}">
            @error('nama')
                <div class="error-text">!!!{{ $message }}</div>
            @enderror

            <input type="email" name="email" placeholder="Masukkan E-Mail USK" value="{{ old('email') }}">
            @error('email')
                <div class="error-text">!!!{{ $message }}</div>
            @enderror

            <input type="text" name="npm" placeholder="Masukkan NPM" value="{{ old('npm') }}">
            @error('npm')
                <div class="error-text">!!!{{ $message }}</div>
            @enderror

            <input type="text" name="prodi" placeholder="Masukkan Prodi" value="{{ old('prodi') }}">
            @error('prodi')
                <div class="error-text">!!!{{ $message }}</div>
            @enderror

            <input type="password" name="password" placeholder="Buat Kata Sandi">
             @error('password')
                <div class="error-text">!!!{{ $message }}</div>
            @enderror

            <input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi">
            @error('password_confirmation')
                <div class="error-text">!!!{{ $message }}</div>
            @enderror

            <button type="submit" class="btn">SIGN UP</button>
        </form>
        <div class="text-link">
            Sudah Punya Akun? <a href="{{ route('login') }}">Masuk disini</a>
        </div>
    </div>
    <img src="assets/register.png">
</body>
</html>
