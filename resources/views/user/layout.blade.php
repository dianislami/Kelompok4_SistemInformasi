<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Lost & Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin-right: 30px;
            margin-left: 30px;
            height: 100%;
        }
        .topbar {
            width: 100%;
            padding: 30px 30px 20px 30px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: bold;
            font-size: 18px;
            margin-right: 80px;
        }
        small {
            color: #0C3A2F;
            font-size: 10px;
            line-height: 12px;
        }
        .search-bar {
            width: 46rem;
            position: relative;
            flex-shrink: 0;
        }
        .search-icon {
            position: absolute;
            right: 15px; /* Geser ke kanan */
            top: 50%;
            transform: translateY(-50%); /* Tengah vertikal */
            width: 18px; /* Ukuran icon */
            height: 18px;
            pointer-events: none; /* Biar klik tetap ke input */
        }
        .search-bar input::placeholder {
            font-size: 12px; /* Ukuran tulisan placeholder */
        }
        .search-bar input {
            width: 100%;
            height: 35px; 
            background-color: rgba(198, 215, 201, 0.32);
            border: 1px solid rgba(12, 58, 47, 0.3);
            box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 5px 15px;
            font-size: 12px;
            color: #0C3A2F
        }
        .search-bar input:focus {
            outline: none; /* Hilangin garis biru default */
            border: 1px solid rgba(12, 58, 47, 0.3); /* Tetap pakai border yang sama */
            background-color: rgba(198, 215, 201, 0.32); /* Tetap sama */
            box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.1); /* Tetap sama */
        }
        .profile {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .profile span {
            font-size: 15px;
        }
        .btn-out {
            padding: 3px 15px;
            font-size: 12px;
            color: #0C3A2F;
            font-weight: bold;
            border-radius: 15px;
            background: #fff;
            border: 1.5px solid #0C3A2F;
        }
        .btn-out:hover {
            background-color: #0C3A2F;
            color: #fff;
            transition: 0.3 ease-in-out;
        }
        .rounded-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }
        .logo-item {
            width: 20px;
            height: 20px;
        }
        .sidebar {
            width: 233px;
            padding-top: 15px;
            position: fixed;
            top: 70px; /* Sejajar di bawah topbar */
            overflow-y: auto;
            font-size: 12px;
        }
        .sidebar a {
            display: flex;
            align-items: center;
            line-height: 16px;
            padding-left: 30px;
            color: #6D9773;
            text-decoration: none;
            font-weight: bold;
        }
        .sidebar-item.active {
            color: #0C3A2F; /* Warna tulisan berubah saat aktif */
        }
        .sidebar-item.active .wrapper {
            position: relative; /* Tambahkan ini untuk memberikan konteks posisi pada wrapper */
        }
        .sidebar-item.active .wrapper::before {
            content: '';
            position: absolute;
            left: 0px;
            top: 50%;
            transform: translateY(-50%);
            width: 5px;
            height: 40px;
            background-color: #0C3A2F; /* Persegi kecil */
        }
        .sidebar-item:hover {
            color: #0C3A2F; /* Warna tulisan saat hover */
        }
        .wrapper {
            background-color: #CAD9CC;
            margin-right: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 58px;
            height: 100px;
        }
        .wrapper.top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .wrapper.bottom {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .main {
            float: 1;
            margin-left: 233px;
            padding: 0px;
            margin-right: 30px;
        }

    </style>
    @yield('head') 
</head>
<body>

    {{-- Topbar --}}
    <div class="topbar">
        {{-- Logo --}}
        <div class="logo">
            <img src="assets/logo.png" alt="Logo" class="rounded-circle">
            <small>Campus <br>Lost&Found</small>
        </div>

        {{-- Search Bar --}}
        <div class="search-bar">
            <input type="text" placeholder="Type to search...">
            <img src="assets/search.png" class="search-icon">
        </div>

        {{-- Profile + Logout --}}
        <div class="profile">
            <span>{{ Auth::user()->nama ?? 'Guest' }}</span>
            @auth
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn-out" type="submit">Log out</button>
                </form>
            @endauth
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="sidebar">
        <a href="{{ url('/dashboard') }}" class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <span class="wrapper top">
                <img src="{{ request()->is('dashboard') ? asset('assets/home.png') : asset('assets/home1.png') }}" class="logo-item">
            </span>
            Beranda
        </a>
        <a href="{{ url('/lost') }}" class="sidebar-item {{ request()->is('lost') ? 'active' : '' }}">
            <span class="wrapper">
                <img src="{{ request()->is('lost') ? asset('assets/lost.png') : asset('assets/lost1.png') }}" class="logo-item">
            </span>
            Barang <br>Hilang
        </a>
        <a href="{{ url('/found') }}" class="sidebar-item {{ request()->is('found') ? 'active' : '' }}">
            <span class="wrapper">
                <img src="{{ request()->is('found') ? asset('assets/found.png') : asset('assets/found1.png') }}" class="logo-item">
            </span>
            Barang <br>Ditemukan
        </a>
        <a href="{{ url('/report') }}" class="sidebar-item {{ request()->is('report') ? 'active' : '' }}">
            <span class="wrapper">
                <img src="{{ request()->is('report') ? asset('assets/report.png') : asset('assets/report1.png') }}" class="logo-item">
            </span>
            Buat <br>Laporan
        </a>
        <a href="{{ url('/profil') }}" class="sidebar-item {{ request()->is('profil') ? 'active' : '' }}">
            <span class="wrapper bottom">
                <img src="{{ request()->is('profil') ? asset('assets/profile.png') : asset('assets/profile1.png') }}" class="logo-item">
            </span>
            Profil
        </a>
    </div>

    {{-- Konten Halaman --}}
    <main class="main">
        @yield('content')
    </main>

</body>
</html>
