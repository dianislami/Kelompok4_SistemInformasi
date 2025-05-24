@extends('admin.layout_admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <style>
        .section-title {
            font-weight: bold;
            color: var(--color-primary);
            text-align: left;
        }

        .slider-wrapper {
            display: flex;
            overflow-x: auto;
            gap: 30px;
            padding-right: 40px;
            padding-bottom: 20px;
            margin-bottom: 30px;
            scroll-behavior: smooth;
        }

        .laporan-card {
            width: 240px;
            background: linear-gradient(to bottom, #86a98d, #cad9cc);
            border-radius: 25px;
            padding: 20px 15px;
            text-align: center;
            flex-shrink: 0;
        }

        .laporan-card img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .laporan-card h4 {
            font-size: 20px;
            font-weight: 800;
            margin: 10px 0 5px;
            color: #232323;
        }

        .laporan-card p {
            font-size: 14px;
            margin: 0;
        }

        .laporan-card button {
            margin-top: 12px;
            background: var(--color-secondary);
            border: none;
            padding: 7px 30px;
            border-radius: var(--btn-radius);
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        .laporan-stats {
            display: flex;
            justify-content: flex-start;
            margin-top: 30px;
            padding-right: 40px;
            padding-bottom: 20px;
            gap: 50px;
        }

        .stat {
            text-align: left;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stat1 {
            display: flex;
            flex-direction: column;
        }

        .stat-row {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .stat .jumlah {
            font-size: 32px;
            font-weight: 800;
            color: var(--color-yellow);
            margin-right: 4px;
        }

        .stat .label {
            font-size: 16px;
            font-weight: 700;
            color: #000;
            margin-bottom: 2px;
        }

        .stat a {
            display: block;
            font-size: 13px;
            color: #000;
            text-decoration: underline;
            cursor: pointer;
            margin-top: 2px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color: white;
            margin: 6% auto;
            padding: 25px;
            width: 550px;
            border-radius: var(--border-radius);
        }

        .close {
            float: right;
            font-size: 28px;
            cursor: pointer;
        }

        .modal h3 {
            margin-bottom: 15px;
            font-size: 24px;
            font-weight: 800;
            color: var(--color-primary);
        }

        .modal ul {
            list-style: none;
            padding-left: 0;
        }

        .modal ul li {
            margin-bottom: 12px;
            font-size: 16px;
            line-height: 1.5;
        }

        .modal ul li span {
            display: block;
            font-size: 14px;
            color: #444;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <h3 class="section-title">Laporan kehilangan</h3>

    <div class="slider-wrapper">
        
        @foreach ($dataHilang as $item)
        <div class="laporan-card">
            <img src="{{ asset('storage/' . $item->foto_barang) }}" alt="{{ $item->nama_barang }}">
            <h4>{{ $item->nama_barang }}</h4>
            <p>{{ $item->lokasi_ditemukan ?? '-' }}</p>
            <p>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y - H:i') }} WIB</p>
            <button onclick="openDetailModal('{{ $item->nama_barang }}', '{{ $item->kode_hilang }}', `{{ $item->deskripsi_barang }}`)">Lihat</button>
        </div>
        @endforeach

        <div class="laporan-card">
            <img src="assets/dompet.png" alt="Dompet">
            <h4>Dompet</h4>
            <p>Kantin D</p>
            <p>10/05/2025 - 14:57 WIB</p>
            <button onclick="openDetailModal('Dompet', '1122331')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/mukena.png" alt="Mukena">
            <h4>Mukena</h4>
            <p>Gedung E3</p>
            <p>10/05/2025 - 10:37 WIB</p>
            <button onclick="openDetailModal('Mukena', '1122332')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/handbag.png" alt="Hand Bag">
            <h4>Hand Bag</h4>
            <p>Laboratorium Jaringan</p>
            <p>11/05/2025 - 14:27 WIB</p>
            <button onclick="openDetailModal('Hand Bag', '1122333')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/charger.png" alt="Charger HP">
            <h4>Charger HP</h4>
            <p>Gedung D2</p>
            <p>12/05/2025 - 09:15 WIB</p>
            <button onclick="openDetailModal('Charger HP', '1122334')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/buku.png" alt="Buku Noted">
            <h4>Buku Noted</h4>
            <p>Koridor E1</p>
            <p>13/05/2025 - 08:40 WIB</p>
            <button onclick="openDetailModal('Buku Noted', '1122335')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/tas.png" alt="Tas">
            <h4>Tas</h4>
            <p>Gedung C</p>
            <p>14/05/2025 - 13:20 WIB</p>
            <button onclick="openDetailModal('Tas', '1122336')">Lihat</button>
        </div>
    </div>

    <h3 class="section-title">Laporan Penemuan</h3>

    <div class="slider-wrapper">

        @foreach ($dataTemuan as $item)
        <div class="laporan-card">
            <img src="{{ asset('storage/' . $item->foto_barang) }}" alt="{{ $item->nama_barang }}">
            <h4>{{ $item->nama_barang }}</h4>
            <p>{{ $item->lokasi_ditemukan ?? '-' }}</p>
            <p>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y - H:i') }} WIB</p>
            <button onclick="openDetailModal('{{ $item->nama_barang }}', '{{ $item->kode_temu }}', `{{ $item->deskripsi_barang }}`)">Lihat</button>
        </div>
        @endforeach

        <div class="laporan-card">
            <img src="assets/dompet.png" alt="Dompet">
            <h4>Dompet</h4>
            <p>Kantin D</p>
            <p>10/05/2025 - 14:57 WIB</p>
            <button onclick="openDetailModal('Dompet', '1122331')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/mukena.png" alt="Mukena">
            <h4>Mukena</h4>
            <p>Gedung E3</p>
            <p>10/05/2025 - 10:37 WIB</p>
            <button onclick="openDetailModal('Mukena', '1122332')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/handbag.png" alt="Hand Bag">
            <h4>Hand Bag</h4>
            <p>Laboratorium Jaringan</p>
            <p>11/05/2025 - 14:27 WIB</p>
            <button onclick="openDetailModal('Hand Bag', '1122333')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/charger.png" alt="Charger HP">
            <h4>Charger HP</h4>
            <p>Gedung D2</p>
            <p>12/05/2025 - 09:15 WIB</p>
            <button onclick="openDetailModal('Charger HP', '1122334')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/buku.png" alt="Buku Noted">
            <h4>Buku Noted</h4>
            <p>Koridor E1</p>
            <p>13/05/2025 - 08:40 WIB</p>
            <button onclick="openDetailModal('Buku Noted', '1122335')">Lihat</button>
        </div>
        <div class="laporan-card">
            <img src="assets/tas.png" alt="Tas">
            <h4>Tas</h4>
            <p>Gedung C</p>
            <p>14/05/2025 - 13:20 WIB</p>
            <button onclick="openDetailModal('Tas', '1122336')">Lihat</button>
        </div>
    </div>

    <div class="laporan-stats">
        <div class="stat">
            <div class="jumlah">{{ $totalLaporan }}</div>
            <div class="label">Laporan Masuk</div>
        </div>
        <div class="stat">
            <div class="jumlah">11</div>
            <div class="label">Klaim Masuk</div>
        </div>
        <div class="stat">
            <div class="jumlah">{{ $totalUser }}</div>
            <div class="stat1">
                <div class="label">Pengguna Baru</div>
                <a onclick="openUserModal()">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Barang -->
<div id="detailModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('detailModal')">&times;</span>
        <h3 id="modalTitle">Detail Barang</h3>
        <p><strong>ID:</strong> <span id="modalId"></span></p>
        <p><strong>Nama:</strong> <span id="modalNama"></span></p>
        <p><strong>Deskripsi:</strong> <span id="modalDeskripsi"></span></p>
    </div>
</div>

<div id="klaimModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('klaimModal')">&times;</span>
        <h3>Detail Klaim Masuk</h3>
        <ul>
            <li>
                <strong>Klaim dari: Mahasiswa 1</strong>
                <span>Barang diklaim: Dompet - ID 1122331</span>
                <span>Alasan klaim: Dompet hitam tersebut milik saya. Di dalamnya ada kartu mahasiswa dengan nama saya.</span>
                <span>Tanggal Klaim: 15/05/2025</span>
                <span>Status: <span id="klaimStatus1"><b style="color: orange;">Menunggu Verifikasi</b></span></span>
                <div style="margin-top: 8px;">
                    <button onclick="approveKlaim(1)" style="padding: 6px 12px; background: #2e8b57; color: white; border: none; border-radius: 6px; cursor: pointer;">Setujui</button>
                    <button onclick="tolakKlaim(1)" style="padding: 6px 12px; background: #c0392b; color: white; border: none; border-radius: 6px; margin-left: 10px; cursor: pointer;">Tolak</button>
                </div>
            </li>
            <li>
                <strong>Klaim dari: Mahasiswa 2</strong>
                <span>Barang diklaim: Charger HP - ID 1122334</span>
                <span>Alasan klaim: Saya yakin charger itu punya saya karena ada stiker kecil di kepala chargernya.</span>
                <span>Tanggal Klaim: 16/05/2025</span>
                <span>Status: <span id="klaimStatus2"><b style="color: orange;">Menunggu Verifikasi</b></span></span>
                <div style="margin-top: 8px;">
                    <button onclick="approveKlaim(2)" style="padding: 6px 12px; background: #2e8b57; color: white; border: none; border-radius: 6px; cursor: pointer;">Setujui</button>
                    <button onclick="tolakKlaim(2)" style="padding: 6px 12px; background: #c0392b; color: white; border: none; border-radius: 6px; margin-left: 10px; cursor: pointer;">Tolak</button>
                </div>
            </li>
            <li>
                <strong>Klaim dari: Mahasiswa 3</strong>
                <span>Barang diklaim: Tas - ID 1122336</span>
                <span>Alasan klaim: Di dalam tas tersebut ada laptop saya dan kunci kos. Tas itu benar milik saya.</span>
                <span>Tanggal Klaim: 17/05/2025</span>
                <span>Status: <span id="klaimStatus3"><b style="color: orange;">Menunggu Verifikasi</b></span></span>
                <div style="margin-top: 8px;">
                    <button onclick="approveKlaim(3)" style="padding: 6px 12px; background: #2e8b57; color: white; border: none; border-radius: 6px; cursor: pointer;">Setujui</button>
                    <button onclick="tolakKlaim(3)" style="padding: 6px 12px; background: #c0392b; color: white; border: none; border-radius: 6px; margin-left: 10px; cursor: pointer;">Tolak</button>
                </div>
            </li>
        </ul>
    </div>
</div>


<!-- Modal Pengguna Baru -->
<div id="userModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('userModal')">&times;</span>
        <h3>Pengguna Baru Terdaftar</h3>
        <ul>
            @foreach ($user as $u)
            <li>
                <strong>Nama: {{ $u->nama }}</strong>
                <span>Email: {{ $u->email }}</span>
                <span>Register: {{ $u->created_at->format('d/m/Y H:i:s') }}</span>
                <span>Status: Aktif</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    function openDetailModal(nama, id, deskripsi = null) {
        if (deskripsi) {
            tampilkanModal(nama, id, deskripsi);
            return;
        }

        // Data statis (hardcoded)
        const staticData = {
            "1122331": "Saya kehilangan dompet berwarna hitam di area Kantin D pada 10 Mei 2025. Di dalamnya terdapat kartu identitas.",
            "1122332": "Mukena tertinggal di musala dekat Gedung E3. Warna abu-abu muda, berbahan parasut.",
            "1122333": "Hand bag berwarna cokelat gelap tertinggal di Lab Jaringan. Mohon info jika ada yang menemukannya.",
            "1122334": "Lupa membawa charger saat meninggalkan kelas di Gedung B, ruang 204. Kepala putih, kabel masih bagus.",
            "1122335": "Buku catatan berwarna hijau dan oranye tertinggal di ruang baca perpustakaan. Isinya tugas penting.",
            "1122336": "Tas ransel biru tertinggal di dekat motor di parkiran barat. Terdapat laptop dan buku kuliah di dalamnya."
        };

        // Cek apakah ID termasuk data statis
        if (staticData[id]) {
            deskripsi = staticData[id];
            tampilkanModal(nama, id, deskripsi);
        } else {
            // Fetch dari server (AJAX)
            fetch(`/laporan/detail/${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        tampilkanModal(data.nama_barang, id, data.deskripsi_barang);
                    } else {
                        tampilkanModal(nama, id, "Deskripsi tidak ditemukan. (ID: " + id + ")");
                        console.error("Error from server:", data.message);
                    }
                })
                .catch(error => {
                    console.error("Gagal mengambil data:", error);
                    tampilkanModal(nama, id, "Terjadi kesalahan saat memuat data.");
                });
        }

        function tampilkanModal(nama, id, deskripsi) {
            document.getElementById('modalNama').innerText = nama;
            document.getElementById('modalId').innerText = id;
            document.getElementById('modalDeskripsi').innerText = deskripsi;
            document.getElementById('modalTitle').innerText = 'Detail ' + nama;
            document.getElementById('detailModal').style.display = 'block';
        }
    }

    function openListModal() {
        document.getElementById('listModal').style.display = 'block';
    }

    function openKlaimModal() {
        document.getElementById('klaimModal').style.display = 'block';
    }

    function openUserModal() {
        document.getElementById('userModal').style.display = 'block';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }
</script>

<script>
    function approveKlaim(id) {
        const statusEl = document.getElementById("klaimStatus" + id);
        if (statusEl) {
            statusEl.innerHTML = "<b style='color: green;'>Disetujui</b>";
        }
    }

    function tolakKlaim(id) {
        const statusEl = document.getElementById("klaimStatus" + id);
        if (statusEl) {
            statusEl.innerHTML = "<b style='color: red;'>Ditolak</b>";
        }
    }
</script>

@endsection