@extends('admin.layout_admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/daftar_klaim.css') }}">
@endsection

@section('content')
<div class="update">
    <div class="judul">
        <h4>Daftar <span>Klaim</span></h4>
    </div>
        
    <div class="card-container">
        <div class="klaim-card">
            <div class="klaim-info">
                <h3>ID Barang #11223344</h3>
                <p>2 klaim diterima</p>
            </div>
            <button class="klaim-button" onclick="openPopup('11223344', 2)">Lihat</button>
        </div>
            
        <div class="klaim-card">
            <div class="klaim-info">
                <h3>ID Barang #11223345</h3>
                <p>1 klaim diterima</p>
            </div>
            <button class="klaim-button" onclick="openPopup('11223345', 1)">Lihat</button>
        </div>
    </div>

    <div class="card-container indented">
        <div class="klaim-card highlighted">
            <div class="klaim-info">
                <h3>ID Barang #11223346</h3>
                <p>1 klaim diterima</p>
            </div>
            <button class="klaim-button" onclick="openPopup('11223346', 1)">Lihat</button>
        </div>
            
        <div class="klaim-card">
            <div class="klaim-info">
                <h3>ID Barang #11223347</h3>
                <p>1 klaim diterima</p>
            </div>
            <button class="klaim-button" onclick="openPopup('11223347', 1)">Lihat</button>
        </div>
    </div>

    <div class="card-container">   
        <div class="klaim-card">
            <div class="klaim-info">
                <h3>ID Barang #11223348</h3>
                <p>3 klaim diterima</p>
            </div>
            <button class="klaim-button" onclick="openPopup('11223348', 3)">Lihat</button>
        </div>
            
        <div class="klaim-card">
            <div class="klaim-info">
                <h3>ID Barang #11223349</h3>
                <p>2 klaim diterima</p>
            </div>
            <button class="klaim-button" onclick="openPopup('11223349', 2)">Lihat</button>
        </div>
    </div>

    <div class="card-container indented">
        <div class="klaim-card">
            <div class="klaim-info">
                <h3>ID Barang #11223350</h3>
                <p>1 klaim diterima</p>
            </div>
            <button class="klaim-button" onclick="openPopup('11223350', 1)">Lihat</button>
        </div>
            
        <div class="klaim-card">
            <div class="klaim-info">
                <h3>ID Barang #11223351</h3>
                <p>1 klaim diterima</p>
            </div>
            <button class="klaim-button" onclick="openPopup('11223351', 1)">Lihat</button>
        </div>
    </div>
        
    <div class="illustration">
        <img src="{{ asset('assets/Klaim_admin.png') }}" alt="Celebration illustration">
    </div>
</div>

<!-- Popup Overlay -->
<div id="popupOverlay" class="popup-overlay">
    <div class="popup-container">
        <div class="popup-header">
            <h3>Detail Barang <span id="popupBarangId"></span></h3>
            <button class="close-button" onclick="closePopup()">&times;</button>
        </div>
        <div class="popup-content">
            <div class="barang-info">
                <div class="barang-image">
                    <img id="barangImage" src="{{ asset('assets/placeholder-item.png') }}" alt="Gambar Barang">
                </div>
                <div class="barang-details">
                    <h4 id="barangName">Loading...</h4>
                    <p id="barangDesc">Loading...</p>
                    <div class="barang-properties">
                        <div class="property">
                            <span class="label">Lokasi Ditemukan</span>
                            <span id="barangLocation" class="value">Loading...</span>
                        </div>
                        <div class="property">
                            <span class="label">Tanggal Ditemukan</span>
                            <span id="barangDate" class="value">Loading...</span>
                        </div>
                        <div class="property">
                            <span class="label">Kategori</span>
                            <span id="barangCategory" class="value">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-divider">
                <h4 class="section-title">Daftar Klaim</h4>
            </div>
            
            <div id="klaimListContainer">
                <!-- Klaim items will be populated here dynamically -->
            </div>
        </div>
        <div class="popup-footer">
            <button class="popup-button secondary" onclick="closePopup()">Tutup</button>
        </div>
    </div>
</div>

<script>
    // Data barang harus didefinisikan di atas sebelum fungsi menggunakannya
    const barangData = {
        '11223344': {
            name: 'Laptop Dell XPS 13',
            desc: 'Laptop berwarna hitam dengan stiker Universitas Indonesia di bagian belakang',
            location: 'Perpustakaan Pusat',
            date: '12/04/2025',
            category: 'Elektronik',
            image: 'Laptop-Klaim.jpg'
        },
        '11223345': {
            name: 'Dompet Kulit Hitam',
            desc: 'Dompet kulit berwarna coklat dengan inisial AR di bagian belakang',
            location: 'Kantin Fakultas Teknik',
            date: '15/04/2025',
            category: 'Aksesoris',
            image: 'dompet-lost.jpg'
        },
        '11223346': {
            name: 'Kunci Motor Honda',
            desc: 'Kunci motor Honda dengan gantungan berbentuk bola basket',
            location: 'Parkiran Fakultas Ekonomi',
            date: '10/04/2025',
            category: 'Kunci',
            image: 'kunci.png'
        },
        '11223347': {
            name: 'Kartu Identitas Mahasiswa',
            desc: 'KTM atas nama Dinda Permata NPM 1906384725',
            location: 'Gedung Rektorat Lt.2',
            date: '18/04/2025',
            category: 'Kartu Identitas',
            image: 'KTM-Klaim.jpeg'
        },
        '11223348': {
            name: 'Earphone Samsung',
            desc: 'Earphone Samsung warna putih dalam case bening',
            location: 'Ruang 301 Gedung A',
            date: '05/04/2025',
            category: 'Elektronik',
            image: 'EarPhone-Klaim.jpg'
        },
        '11223349': {
            name: 'Buku Catatan',
            desc: 'Buku catatan sampul hijau dengan nama Arief di halaman depan',
            location: 'Lab Biologi Lt.3',
            date: '20/04/2025',
            category: 'Alat Tulis',
            image: 'BukuNoted-lost.jpg'
        },
        '11223350': {
            name: 'Flash Disk 32GB',
            desc: 'Flash disk Kingston 32GB berwarna biru',
            location: 'Lab Komputer',
            date: '14/04/2025',
            category: 'Elektronik',
            image: 'FlashDisk-Klaim.jpg'
        },
        '11223351': {
            name: 'Kacamata Frame Hitam',
            desc: 'Kacamata frame hitam dalam case merah',
            location: 'Aula Utama',
            date: '22/04/2025',
            category: 'Aksesoris',
            image: 'Kacamata-Klaim.jpg'
        }
    };
    
    function openPopup(barangId, klaimCount) {
        console.log('Opening popup for:', barangId, 'with', klaimCount, 'claims'); // Debug log
        
        document.getElementById('popupBarangId').textContent = '#' + barangId;
        
        // Load barang details
        const barang = barangData[barangId];
        if (barang) {
            document.getElementById('barangName').textContent = barang.name;
            document.getElementById('barangDesc').textContent = barang.desc;
            document.getElementById('barangLocation').textContent = barang.location;
            document.getElementById('barangDate').textContent = barang.date;
            document.getElementById('barangCategory').textContent = barang.category;
            // Use asset helper for Laravel
            document.getElementById('barangImage').src = "{{ asset('assets/') }}/" + barang.image;
        }
        
        // Generate klaim items
        const klaimListContainer = document.getElementById('klaimListContainer');
        klaimListContainer.innerHTML = ''; // Clear previous content
        
        if (klaimCount === 0) {
            klaimListContainer.innerHTML = '<div class="no-klaim">Belum ada klaim untuk barang ini</div>';
        } else {
            for (let i = 1; i <= klaimCount; i++) {
                const klaimItem = document.createElement('div');
                klaimItem.className = 'klaim-item';
                
                const randomDate = generateRandomDate();
                const randomStatus = getRandomStatus();
                const statusClass = getStatusClass(randomStatus);
                const randomUserId = Math.floor(1000 + Math.random() * 9000);
                const randomUser = `User-${randomUserId}`;
                const randomDesc = getRandomDescription(barang.category);
                
                klaimItem.innerHTML = `
                    <div class="klaim-item-header">
                        <span class="klaim-number">Klaim #${barangId}-${i}</span>
                        <span class="klaim-date">${randomDate}</span>
                    </div>
                    <div class="klaim-item-content">
                        <div class="klaim-details">
                            <p><strong>Pengklaim:</strong> ${randomUser}</p>
                            <p><strong>Deskripsi:</strong> ${randomDesc}</p>
                            <p><strong>Bukti Kepemilikan:</strong> ${getBuktiKepemilikan(barang.category)}</p>
                        </div>
                        <div class="klaim-status">
                            <span class="status-badge ${statusClass}">${randomStatus}</span>
                            <div class="action-buttons">
                                <button class="action-button approve" onclick="updateStatus(this, 'Disetujui')">Setujui</button>
                                <button class="action-button reject" onclick="updateStatus(this, 'Ditolak')">Tolak</button>
                                <button class="detail-button" onclick="showDetailKlaim('${barangId}', ${i}, '${randomUser}')">Detail</button>
                            </div>
                        </div>
                    </div>
                `;
                
                klaimListContainer.appendChild(klaimItem);
            }
        }
        
        // Show the popup
        const popup = document.getElementById('popupOverlay');
        popup.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when popup is open
        
        console.log('Popup should be visible now'); // Debug log
    }
    
    function closePopup() {
        document.getElementById('popupOverlay').classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    }
    
    function generateRandomDate() {
        const currentDate = new Date();
        const daysAgo = Math.floor(Math.random() * 14); // Random date within the last 14 days
        const date = new Date(currentDate.getTime() - (daysAgo * 24 * 60 * 60 * 1000));
        return date.toLocaleDateString('id-ID', { day: '2-digit', month: '2-digit', year: 'numeric' });
    }
    
    function getRandomStatus() {
        const statuses = ['Menunggu', 'Disetujui', 'Ditolak', 'Dalam Proses'];
        return statuses[Math.floor(Math.random() * statuses.length)];
    }
    
    function getStatusClass(status) {
        switch(status) {
            case 'Menunggu': return 'status-waiting';
            case 'Disetujui': return 'status-approved';
            case 'Ditolak': return 'status-rejected';
            case 'Dalam Proses': return 'status-processing';
            default: return '';
        }
    }
    
    function getRandomDescription(category) {
        const descriptions = {
            'Elektronik': [
                'Laptop saya hilang saat sedang belajar di perpustakaan',
                'Saya meninggalkan earphone di ruang kelas setelah ujian',
                'Flash disk tertinggal saat presentasi di lab komputer'
            ],
            'Aksesoris': [
                'Saya kehilangan dompet saat makan di kantin',
                'Kacamata saya hilang setelah acara di aula',
                'Dompet tertinggal di meja kantin'
            ],
            'Kunci': [
                'Kunci motor hilang saat parkir di kampus',
                'Saya lupa mengambil kunci motor setelah parkir',
                'Kunci tertinggal di parkiran fakultas'
            ],
            'Kartu Identitas': [
                'KTM hilang saat mengurus administrasi',
                'Saya kehilangan kartu identitas di gedung rektorat',
                'KTM terselip saat mengurus berkas di gedung rektorat'
            ],
            'Alat Tulis': [
                'Buku catatan tertinggal setelah praktikum',
                'Saya meninggalkan buku di ruang lab',
                'Buku hilang saat belajar kelompok di kampus'
            ]
        };
        
        const defaultDesc = [
            'Barang ini milik saya yang hilang di kampus',
            'Saya kehilangan barang ini minggu lalu',
            'Ini adalah barang saya yang tertinggal'
        ];
        
        const options = descriptions[category] || defaultDesc;
        return options[Math.floor(Math.random() * options.length)];
    }
    
    function getBuktiKepemilikan(category) {
        const bukti = {
            'Elektronik': [
                'Nota pembelian dengan nomor seri yang sama',
                'Foto saat menggunakan barang tersebut',
                'Dapat menyebutkan password/pin perangkat'
            ],
            'Aksesoris': [
                'Foto dengan memakai barang tersebut',
                'Detail unik yang tidak terlihat dari luar',
                'Nota pembelian dengan deskripsi yang cocok'
            ],
            'Kunci': [
                'STNK kendaraan yang sesuai',
                'Dapat menunjukkan kendaraan yang cocok',
                'Ada gantungan kunci identik yang masih dimiliki'
            ],
            'Kartu Identitas': [
                'Identitas pada kartu sesuai dengan KTP',
                'Memiliki surat kehilangan dari kepolisian',
                'Terdaftar di sistem universitas dengan nomor yang sama'
            ],
            'Alat Tulis': [
                'Ada nama di halaman tertentu buku',
                'Dapat menjelaskan isi catatan dengan detail',
                'Ada tanda/tulisan unik di bagian tertentu'
            ]
        };
        
        const defaultBukti = [
            'Foto bersama barang tersebut',
            'Dapat mendeskripsikan detail yang tidak terlihat',
            'Nota pembelian dengan detail yang cocok'
        ];
        
        const options = bukti[category] || defaultBukti;
        return options[Math.floor(Math.random() * options.length)];
    }
    
    function updateStatus(button, newStatus) {
        const klaimItem = button.closest('.klaim-item');
        const statusBadge = klaimItem.querySelector('.status-badge');
        
        // Hapus kelas status lama
        statusBadge.classList.remove('status-waiting', 'status-approved', 'status-rejected', 'status-processing');
        
        // Tambahkan kelas status baru
        statusBadge.textContent = newStatus;
        statusBadge.classList.add(getStatusClass(newStatus));
        
        // Tambahkan efek animasi
        statusBadge.classList.add('status-updated');
        setTimeout(() => {
            statusBadge.classList.remove('status-updated');
        }, 1000);
    }
    
    function showDetailKlaim(barangId, klaimNumber, userId) {
        // Kode ini bisa dikembangkan untuk menampilkan halaman detail klaim
        alert(`Menampilkan detail lengkap untuk klaim #${barangId}-${klaimNumber} dari ${userId}`);
        // Alternatif: window.location.href = `/admin/klaim/${barangId}/${klaimNumber}`;
    }
    
    // Close popup when clicking outside of it
    window.addEventListener('click', function(event) {
        const overlay = document.getElementById('popupOverlay');
        if (event.target === overlay && !event.target.closest('.popup-container')) {
            closePopup();
        }
    });
    
    // Debug: Test if elements exist when page loads
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM loaded');
        console.log('Popup overlay exists:', document.getElementById('popupOverlay') !== null);
        console.log('All required elements exist:', {
            popupBarangId: document.getElementById('popupBarangId') !== null,
            barangName: document.getElementById('barangName') !== null,
            barangDesc: document.getElementById('barangDesc') !== null,
            barangLocation: document.getElementById('barangLocation') !== null,
            barangDate: document.getElementById('barangDate') !== null,
            barangCategory: document.getElementById('barangCategory') !== null,
            barangImage: document.getElementById('barangImage') !== null,
            klaimListContainer: document.getElementById('klaimListContainer') !== null
        });
    });
</script>
@endsection