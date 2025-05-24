@extends('admin.layout_admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="welcome">
            <img src="assets/dashboard.png" class="foto">
            <h2>Selamat Datang Admin!!</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, labore doloremque. Cumque nobis voluptatem consequatur ut obcaecati qui vero excepturi ullam molestiae, autem accusantium expedita sint doloribus molestias, enim quidem!</p>
        </div>

        {{-- update --}}
        <div class="update">
            <div class="judul">
                <span class="garis"></span>
                <h4>Laporan Terbaru</h4>
            </div>
            <div class="card-container">
                <!-- Card 1 -->
                <div class="card-item">
                    <div class="card-img">
                        <img src="assets/kunci.png" alt="Barang Hilang">
                        <div class="status selesai">
                            <img src="assets/seru-hijau.png">
                            Barang <br>di-Klaim
                        </div>
                    </div>
                    <div class="info">
                        <div class="card-body">
                            <div class="ikon">
                                <img src="assets/ikon-barang.png">
                                <p>Kunci Motor</p>
                            </div>
                            <div class="ikon">
                                <img src="assets/ikon-lokasi.png">
                                <p>Ruang E3.05</p>
                            </div>
                            <div class="ikon">
                                <img src="assets/ikon-jam.png">
                                <p>12/05/2025 - 14:57 WIB</p>
                            </div>
                        </div>
                        <button class="button selesai">Selesai</button>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card-item">
                    <div class="card-img ditemukan">
                        <img src="assets/kunci.png" class="temuan" alt="Barang Hilang">
                        <div class="status ditemukan">
                            <img src="assets/seru-kuning.png">
                            Barang <br>Ditemukan
                        </div>
                    </div>
                    <div class="info">
                        <div class="card-body">
                            <div class="ikon">
                                <img src="assets/ikon-barang.png">
                                <p>Kunci Motor</p>
                            </div>
                            <div class="ikon">
                                <img src="assets/ikon-lokasi.png">
                                <p>Ruang E3.05</p>
                            </div>
                            <div class="ikon">
                                <img src="assets/ikon-jam.png">
                                <p>12/05/2025 - 14:57 WIB</p>
                            </div>
                        </div>
                        <button class="button ditemukan">Dicari</button>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card-item">
                    <div class="card-img">
                        <img src="assets/kunci.png" alt="Barang Hilang">
                        <div class="status hilang">
                            <img src="assets/seru-merah.png">
                            Barang <br>Hilang
                        </div>
                    </div>
                    <div class="info">
                        <div class="card-body">
                            <div class="ikon">
                                <img src="assets/ikon-barang.png">
                                <p>Kunci Motor</p>
                            </div>
                            <div class="ikon">
                                <img src="assets/ikon-lokasi.png">
                                <p>Ruang E3.05</p>
                            </div>
                            <div class="ikon">
                                <img src="assets/ikon-jam.png">
                                <p>12/05/2025 - 14:57 WIB</p>
                            </div>
                        </div>
                        <button class="button hilang">Dicari</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- statistik --}}
        <div class="statistik">
            <div class="judul">
                <span class="garis"></span>
                <h4>Lost&Found Statistik</h4>
            </div>
            <div class="stat">
                <div class="stat1">
                    <img src="assets/stat.png">
                </div>
                <div class="stat2">
                    <div class="stat3">
                        <img src="assets/stat1.png">
                    </div>
                    <div class="stat4">
                        <div class="stat5">
                            <img src="assets/stat2.png" class="st1">
                            <img src="assets/child.png" class="st2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection