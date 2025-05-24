@extends('user.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/lost.css') }}">
@endsection

@section('content')
    <div class="update">
        <div class="update">
            <div class="judul">
                <span class="garis"></span>
                <h4>Daftar Barang Hilang</h4>
            </div>
        </div>
        
        <div class="card-container">
            <!-- Item 1 -->
            <div class="card-item1">
                <div class="card-img">
                    <img src="{{ asset('assets/dompet-lost.jpg') }}" alt="Dompet">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Dompet</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>10/05/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="1">Detail</button> 
                </div>
            </div> 
            
            <!-- item 2 -->
            <div class="card-item1">
                <div class="card-img">
                    <img src="{{ asset('assets/mukena-lost.jpg') }}" alt="Mukena">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Mukena</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>10/05/2025 - 10:37 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="2">Detail</button> 
                    </div>
                </div>
            <!-- Item 3 -->
            <div class="card-item1">
                <div class="card-img">
                    <img src="{{ asset('assets/HandBag-lost.jpg') }}" alt="Hand Bag">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Hand Bag</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>11/05/2025 - 14:27 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="3">Detail</button> 
                    </div>
               </div>
            </div>
        <div class="card-container">
            <!-- Item 4 -->
            <div class="card-item1">
                <div class="card-img">
                    <img src="{{ asset('assets/charger-lost.jpg') }}" alt="Charger HP">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Charger HP</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>09/05/2025 - 15:01 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="5">Detail</button> 
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="card-item1">
                    <div class="card-img">
                    <img src="{{ asset('assets/BukuNoted-lost.jpg') }}" alt="Buku Notes">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Buku Noted</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>08/05/2025 - 13:30 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="5">Detail</button> 
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="card-item1">
                    <div class="card-img">
                    <img src="{{ asset('assets/tas-lost.jpg') }}" alt="Tas">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Tas</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>08/05/2025 - 11:45 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="6">Detail</button> 
                    </div>
                </div>
            </div>
        <div class="card-container">
            <!-- Item 7 -->
            <div class="card-item1">
                <div class="card-img">
                    <img src="{{ asset('assets/BukuNovel-lost.jpg') }}" alt="Buku Novel">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Buku Novel</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>07/05/2025 - 16:15 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="7">Detail</button> 
                    </div>
                </div>
                <!-- Item 8 -->
                <div class="card-item1">
                    <div class="card-img">
                    <img src="{{ asset('assets/tumbler-lost.jpg') }}" alt="Tumbler">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Tumbler</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>07/05/2025 - 13:20 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="8">Detail</button> 
                    </div>
                </div>
                <!-- Item 9 -->
                <div class="card-item1">
                    <div class="card-img">
                    <img src="{{ asset('assets/KotakPensil-lost.jpg') }}" alt="KotakPensil">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                    <div class="status-text">
                        Barang<br>Hilang
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="assets/ikon-barang.png">
                            <p>Kotak Pensil</p>
                        </div>
                        <div class="ikon">
                            <img src="assets/ikon-jam.png">
                            <p>06/05/2025 - 16:17 WIB</p>
                        </div>
                    </div>
                    <button class="button hilang"  data-item-id="9">Detail</button> 
                    </div>

                </div>
            </div>
        </div>
        @foreach ($dataHilang->chunk(3) as $chunk)
            <div class="card-container">
            @foreach ($chunk as $item)
                <div class="card-item1">
                    <div class="card-img">
                        <img src="{{ asset('storage/' . $item->foto_barang) }}" alt="{{ $item->nama_barang }}">
                    </div>
                    <div class="item-status">
                        <img src="{{ asset('assets/seru-merah.png') }}" alt="Status Icon">
                        <div class="status-text">
                            Barang<br>Hilang
                        </div>
                    </div>
                    <div class="info">
                        <div class="card-body">
                            <div class="ikon">
                                <img src="{{ asset('assets/ikon-barang.png') }}">
                                <p>{{ $item->nama_barang }}</p>
                            </div>
                            <div class="ikon">
                                <img src="{{ asset('assets/ikon-jam.png') }}">
                                <p>{{ \Carbon\Carbon::parse($item->tanggal_hilang)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($item->created_at)->format('H:i') }} WIB</p>
                            </div>
                        </div>
                        <button class="button hilang" data-item-id="{{ $item->id }}"
                            data-name="{{ $item->nama_barang }}"
                            data-image="{{ asset('storage/' . $item->foto_barang) }}"
                            data-datetime="{{ \Carbon\Carbon::parse($item->created_at)->format('H:i:s') }} WIB"
                            data-day="{{ \Carbon\Carbon::parse($item->tanggal_hilang)->format('d/m/Y') }}"
                            data-description="{{ $item->deskripsi_barang }}"
                            data-reporter="{{ $item->nama_pelapor }}"
                            data-contact="{{ $item->kontak }}"
                        >Detail</button> 
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function() {

    // Prevent duplicate execution
    if (window.modalInitialized) return;
    window.modalInitialized = true;
    
    // Item details database (in a real application, this would come from a backend)
    const itemDetails = {
        1: {
            name: "Dompet",
            category: "Barang Pribadi",
            location: "Kantin D",
            dateTime: "10/05/2025 - 14:57 WIB",
            day: "Sabtu",
            description: "Dompet kulit berwarna hitam dengan gantungan berumbai disampingnya. Berisi beberapa kartu penting dan sejumlah uang tunai. Terakhir terlihat di meja pojok Kantin D.",
            reporter: "Ahmad Fauzan",
            contact: "081234567890",
            imageSrc: "{{ asset('assets/dompet-lost.jpg') }}"
        },
        2: {
            name: "Mukena",
            category: "Perlengkapan Ibadah",
            location: "Gedung E3",
            dateTime: "10/05/2025 - 10:37 WIB",
            day: "Sabtu",
            description: "Mukena warna mocca dengan motif bunga kecil kecil di beberapa bagian. Dilaporkan hilang setelah sholat Dhuha di mushola Gedung E3.",
            reporter: "Annisa Rahma",
            contact: "085678901234",
            imageSrc: "{{ asset('assets/mukena-lost.jpg') }}"
        },
        3: {
            name: "Hand Bag",
            category: "Tas",
            location: "Laboratorium Jaringan",
            dateTime: "11/05/2025 - 14:27 WIB",
            day: "Minggu",
            description: "Hand bag kecil warna coklat dengan bahan kulit. Berisi beberapa kosmetik dan sebuah flashdisk penting. Terakhir kali diletakkan di meja komputer nomor 5.",
            reporter: "Dinda Kusuma",
            contact: "087890123456",
            imageSrc: "{{ asset('assets/HandBag-lost.jpg') }}"
        },
        4: {
            name: "Charger HP",
            category: "Elektronik",
            location: "Ruang D2.03",
            dateTime: "09/05/2025 - 15:27 WIB",
            day: "Jumat",
            description: "Charger HP merk Samsung warna putih dengan kabel USB Type-C. Tertinggal di stop kontak dekat kursi belakang ruang kelas D2.03 setelah kuliah Pemrograman Web.",
            reporter: "Budi Santoso",
            contact: "089012345678",
            imageSrc: "{{ asset('assets/charger-lost.jpg') }}"
        },
        5: {
            name: "Buku Notes",
            category: "Alat Tulis",
            location: "Perpustakaan",
            dateTime: "08/05/2025 - 13:30 WIB",
            day: "Kamis",
            description: "Buku notes hardcover warna hijau tua dengan stiker logo kampus di bagian depan. Berisi catatan penting mata kuliah Basis Data. Terakhir digunakan di meja baca lantai 2 perpustakaan.",
            reporter: "Cindy Paramita",
            contact: "082345678901",
            imageSrc: "{{ asset('assets/BukuNoted-lost.jpg') }}"
        },
        6: {
            name: "Tas",
            category: "Tas",
            location: "Kantin C",
            dateTime: "08/05/2025 - 11:45 WIB",
            day: "Kamis",
            description: "Tas ransel biru tidak ada merek dengan model tas serut dan terdapat kantong kecil di bagian depan. Berisi beberapa buku kuliah penting. Terakhir diletakkan di kursi kantin C saat makan siang.",
            reporter: "Eko Prasetyo",
            contact: "083456789012",
            imageSrc: "{{ asset('assets/tas-lost.jpg') }}"
        },
        7: {
            name: "Buku Novel",
            category: "Buku",
            location: "Kamar Mandi Gedung D",
            dateTime: "07/05/2025 - 16:15 WIB",
            day: "Rabu",
            description: "Novel berjudul 'IF WE WERE VILLAINS' karya M. L Rio. Sampul berwarna hitam. Tertinggal di wastafel kamar mandi lantai 2 Gedung D.",
            reporter: "Farhan Akbar",
            contact: "084567890123",
            imageSrc: "{{ asset('assets/BukuNovel-lost.jpg') }}"
        },
        8: {
            name: "Tambler",
            category: "Botol Minum",
            location: "Lab Komputer",
            dateTime: "07/05/2025 - 13:20 WIB",
            day: "Rabu",
            description: "Tambler bahan besi berwarna biru. dengan tutup botol berwarna abu abu putih. Tertinggal di meja komputer nomor 12 setelah praktikum Pemrograman Web.",
            reporter: "Guntur Mahardika",
            contact: "086789012345",
            imageSrc: "{{ asset('assets/tumbler-lost.jpg') }}"
        },
        9: {
            name: "Kotak Pensil",
            category: "Alat Tulis",
            location: "Gedung Rektorat",
            dateTime: "06/05/2025 - 16:17 WIB",
            day: "Selasa",
            description: "Kotak pensil berwarna Beige berbahan kain. Berisi beberapa pulpen, pensil, dan penghapus. Tertinggal di lobi Gedung Rektorat setelah mengurus administrasi.",
            reporter: "Hana Permata",
            contact: "088901234567",
            imageSrc: "{{ asset('assets/KotakPensil-lost.jpg') }}"
        }
    };

    // Function to create modal structure if it doesn't exist
    function createModalStructure() {
        const modalHTML = `
        <div id="itemDetailModal" class="modal">
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <div class="modal-header">
                    <h2 id="modalItemName">Detail Barang</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <img id="modalItemImage" src="" alt="Item Image">
                    </div>
                    <div class="modal-details">
                        <div class="modal-info-section">
                            <h3>Informasi Barang</h3>
                            <div class="info-row">
                                <div class="info-label">Nama Barang</div>
                                <div class="info-value" id="modalItemTitle"></div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Kategori</div>
                                <div class="info-value" id="modalItemCategory"></div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Lokasi</div>
                                <div class="info-value" id="modalItemLocation"></div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Waktu</div>
                                <div class="info-value" id="modalItemDateTime"></div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Hari</div>
                                <div class="info-value" id="modalItemDay"></div>
                            </div>
                        </div>
                        <div class="modal-info-section">
                            <h3>Deskripsi</h3>
                            <p class="item-description" id="modalItemDescription"></p>
                        </div>
                        <div class="modal-info-section">
                            <h3>Kontak Pelapor</h3>
                            <div class="info-row">
                                <div class="info-label">Nama</div>
                                <div class="info-value" id="modalItemReporter"></div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Phone/Email</div>
                                <div class="info-value" id="modalItemContact"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="modalCloseButton" class="btn-secondary">Tutup</button>
                </div>
            </div>
        </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', modalHTML);
    }

    // Remove any existing modal to avoid duplicates
    const existingModal = document.getElementById('itemDetailModal');
    if (existingModal) {
        existingModal.remove();
    }

    // Create the modal
    createModalStructure();

    const modal = document.getElementById('itemDetailModal');
    const closeModalBtn = document.querySelector('.close-modal');
    const modalCloseButton = document.getElementById('modalCloseButton');

    const detailButtons = document.querySelectorAll('.button.hilang');

    detailButtons.forEach(button => {

        // Remove any existing event listeners (to prevent duplicates)
        const newButton = button.cloneNode(true);
        button.parentNode.replaceChild(newButton, button);

        newButton.addEventListener('click', function() {
            const itemId = this.getAttribute('data-item-id');

            // First try to get data from our static database
            const item = itemDetails[itemId];

            const name = item?.name ?? this.getAttribute('data-name');
            const category = item?.category ?? this.getAttribute('data-category') ?? "-";
            const location = item?.location ?? this.getAttribute('data-location') ?? "-";
            const dateTime = item?.dateTime ?? this.getAttribute('data-datetime');
            const day = item?.day ?? this.getAttribute('data-day');
            const description = item?.description ?? this.getAttribute('data-description');
            const reporter = item?.reporter ?? this.getAttribute('data-reporter');
            const contact = item?.contact ?? this.getAttribute('data-contact');
            const imageSrc = item?.imageSrc ?? this.getAttribute('data-image');

            // Isi konten modal
            document.getElementById('modalItemName').textContent = name;
            document.getElementById('modalItemImage').src = imageSrc;
            document.getElementById('modalItemImage').alt = name;
            document.getElementById('modalItemTitle').textContent = name;
            document.getElementById('modalItemCategory').textContent = category;
            document.getElementById('modalItemLocation').textContent = location;
            document.getElementById('modalItemDateTime').textContent = dateTime;
            document.getElementById('modalItemDay').textContent = day;
            document.getElementById('modalItemDescription').textContent = description;
            document.getElementById('modalItemReporter').textContent = reporter;
            document.getElementById('modalItemContact').textContent = contact;

            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    });

    function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Add event listeners for closing the modal
    if(closeModalBtn) {
        closeModalBtn.addEventListener('click', closeModal);
    }

    if(modalCloseButton) {
        modalCloseButton.addEventListener('click', closeModal);
    }

    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

});
        
</script>
@endsection