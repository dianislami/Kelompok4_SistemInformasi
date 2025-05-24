@extends('user.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/lost.css') }}">
@endsection

@section('content')
    <div class="update">
        <div class="update">
            <div class="judul ditemukan">
                <span class="garis-ditemukan"></span>
                <h4>Daftar Barang Ditemukan</h4>
            </div>
        </div>
        
        <div class="card-container">
            <!-- Item 1 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/JamTangan-found.jpg') }}" alt="Jam Tangan" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>Jam Tangan</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang E.01.06</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>10/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="1">Detail</button>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/Handphone-found.jpg') }}" alt="Handphone" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>Handphone</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang E.03.05</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>12/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="2">Detail</button>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/ChargerLaptop-found.jpg') }}" alt="Charger Laptop" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>Charger Laptop</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang E.02.03</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>12/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="3">Detail</button>
                </div>
            </div>
        </div>
        
        <div class="card-container">
            <!-- Item 4 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/HeadPhone-found.jpg') }}" alt="HeadPhone" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>HeadPhone</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang E.02.07</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>11/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="4">Detail</button>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/InEarMonitor-found.jpg') }}" alt="In Ear Monitor" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>In Ear Monitor</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang E.03.08</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>10/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="5">Detail</button>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/Gelang-found.jpg') }}" alt="Gelang" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>Gelang</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang E.02.04</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>16/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="6">Detail</button>
                </div>
            </div>
        </div>
        
        <div class="card-container">
            <!-- Item 7 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/FlashDisk-found.jpg') }}" alt="Flash Disk" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>Flash Disk</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang D.03.06</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>09/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="7">Detail</button>
                </div>
            </div>

            <!-- Item 8 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/kacamata-found.jpg') }}" alt="Kacamata" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>Kacamata</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang D.03.02</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>12/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="8">Detail</button>
                </div>
            </div>

            <!-- Item 9 -->
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('assets/sandal-found.jpg') }}" alt="Sandal" style="filter: blur(3px);">
                </div>
                <div class="item-status">
                    <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                    <div class="status-text" style="color: #ffba00;">
                        Barang<br>Ditemukan
                    </div>
                </div>
                <div class="info">
                    <div class="card-body">
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                            <p>Sandal</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                            <p>Ruang E.01.01</p>
                        </div>
                        <div class="ikon">
                            <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                            <p>15/03/2025 - 14:57 WIB</p>
                        </div>
                    </div>
                    <button class="button ditemukan" data-item-id="9">Detail</button>
                </div>
            </div>
        </div>

        @foreach ($dataTemuan->chunk(3) as $chunk)
        <div class="card-container">
            @foreach ($chunk as $item)
                <div class="card-item">
                    <div class="card-img">
                        <img src="{{ asset('storage/' . $item->foto_barang) }}" alt="{{ $item->nama_barang }}" style="filter: blur(3px);">
                    </div>
                    <div class="item-status">
                        <img src="{{ asset('assets/seru-kuning.png') }}" alt="Status Icon">
                        <div class="status-text" style="color: #ffba00;">
                            Barang<br>Ditemukan
                        </div>
                    </div>
                    <div class="info">
                        <div class="card-body">
                            <div class="ikon">
                                <img src="{{ asset('assets/ikon-barang.png') }}" alt="Item Icon">
                                <p>{{ $item->nama_barang }}</p>
                            </div>
                            <div class="ikon">
                                <img src="{{ asset('assets/ikon-lokasi.png') }}" alt="Location Icon">
                                <p>{{ $item->lokasi_ditemukan }}</p>
                            </div>
                            <div class="ikon">
                                <img src="{{ asset('assets/ikon-jam.png') }}" alt="Time Icon">
                                <p>{{ \Carbon\Carbon::parse($item->tanggal_ditemukan)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($item->created_at)->format('H:i') }} WIB</p>
                            </div>
                        </div>
                        <button class="button ditemukan" data-item-id="{{ $item->id }}"
                            data-name="{{ $item->nama_barang }}"
                            data-image="{{ asset('storage/' . $item->foto_barang) }}"
                            data-datetime="{{ \Carbon\Carbon::parse($item->created_at)->format('H:i:s') }} WIB"
                            data-day="{{ \Carbon\Carbon::parse($item->tanggal_ditemukan)->format('d/m/Y') }}"
                            data-location="{{ $item->lokasi_ditemukan }}"
                            data-description="{{ $item->deskripsi_barang }}"
                            data-reporter="{{ $item->nama_penemu }}"
                            data-contact="{{ $item->phone }}"
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
                    name: "Jam Tangan",
                    category: "Aksesoris",
                    location: "Ruang E.01.06",
                    dateTime: "10/03/2025 - 14:57 WIB",
                    day: "Senin",
                    description: "Jam tangan digital merk Casio warna soft pink. Tali jam berbahan rantai. Ditemukan di meja di ruang E.01.06 setelah perkuliahan selesai.",
                    reporter: "Ahmad Firdaus",
                    contact: "081234567890",
                    imageSrc: "{{ asset('assets/JamTangan-found.jpg') }}"
                },
                2: {
                    name: "Handphone",
                    category: "Elektronik",
                    location: "Ruang E.03.05",
                    dateTime: "12/03/2025 - 14:57 WIB",
                    day: "Rabu",
                    description: "Handphone merk Iphone warna putih case abu abu. Ditemukan tergeletak di kursi ruang E.03.05 setelah perkuliahan Pemrograman Web.",
                    reporter: "Siti Nurhaliza",
                    contact: "085678901234",
                    imageSrc: "{{ asset('assets/Handphone-found.jpg') }}"
                },
                3: {
                    name: "Charger Laptop",
                    category: "Elektronik",
                    location: "Ruang E.02.03",
                    dateTime: "12/03/2025 - 14:57 WIB",
                    day: "Rabu",
                    description: "Charger laptop merk Asus warna putih. Ditemukan tertinggal di stop kontak ruang E.02.03 setelah praktikum Database.",
                    reporter: "Rudi Hartono",
                    contact: "087890123456",
                    imageSrc: "{{ asset('assets/ChargerLaptop-found.jpg') }}"
                },
                4: {
                    name: "HeadPhone",
                    category: "Elektronik",
                    location: "Ruang E.02.07",
                    dateTime: "11/03/2025 - 14:57 WIB",
                    day: "Selasa",
                    description: "Headphone wireless merk Sony warna hitam. Ditemukan di meja belakang ruang E.02.07 setelah perkuliahan AI.",
                    reporter: "Bambang Sulistyo",
                    contact: "089012345678",
                    imageSrc: "{{ asset('assets/HeadPhone-found.jpg') }}"
                },
                5: {
                    name: "In Ear Monitor",
                    category: "Elektronik",
                    location: "Ruang E.03.08",
                    dateTime: "10/03/2025 - 14:57 WIB",
                    day: "Senin",
                    description: "In Ear Monitor merk KZ warna biru transparan. Ditemukan di kursi ruang E.03.08 setelah praktikum Jaringan Komputer.",
                    reporter: "Diana Permata",
                    contact: "082345678901",
                    imageSrc: "{{ asset('assets/InEarMonitor-found.jpg') }}"
                },
                6: {
                    name: "Gelang",
                    category: "Aksesoris",
                    location: "Ruang E.02.04",
                    dateTime: "16/03/2025 - 14:57 WIB",
                    day: "Minggu",
                    description: "Gelang manik manik dengan pita besar berbentuk pita. Ditemukan di lantai dekat pintu keluar ruang E.02.04.",
                    reporter: "Faisal Rahman",
                    contact: "083456789012",
                    imageSrc: "{{ asset('assets/Gelang-found.jpg') }}"
                },
                7: {
                    name: "Flash Disk",
                    category: "Elektronik",
                    location: "Ruang D.03.06",
                    dateTime: "09/03/2025 - 14:57 WIB",
                    day: "Minggu",
                    description: "Flash disk 32GB merk Sandisk warna putih biru. Ditemukan tertinggal di komputer nomor 8 di ruang D.03.06.",
                    reporter: "Gunawan Prabowo",
                    contact: "084567890123",
                    imageSrc: "{{ asset('assets/FlashDisk-found.jpg') }}"
                },
                8: {
                    name: "Kacamata",
                    category: "Aksesoris",
                    location: "Ruang D.03.02",
                    dateTime: "12/03/2025 - 14:57 WIB",
                    day: "Rabu",
                    description: "Kacamata frame pink dengan lensa minus. Ditemukan di meja dosen di ruang D.03.02 setelah ujian Kalkulus.",
                    reporter: "Hendra Wijaya",
                    contact: "086789012345",
                    imageSrc: "{{ asset('assets/kacamata-found.jpg') }}"
                },
                9: {
                    name: "Sandal",
                    category: "Alas Kaki",
                    location: "Ruang E.01.01",
                    dateTime: "15/03/2025 - 14:57 WIB",
                    day: "Sabtu",
                    description: "Sepasang sandal jepit warna pink. Ditemukan di depan ruang E.01.01 setelah kegiatan rapat himpunan.",
                    reporter: "Indah Putri",
                    contact: "088901234567",
                    imageSrc: "{{ asset('assets/sandal-found.jpg') }}"
                }
            };

            // Function to create modal structure if it doesn't exist
            function createModalStructure() {
                if (!document.getElementById('itemDetailModal')) {
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
                                            <div class="info-label">Status</div>
                                            <div class="info-value" id="modalItemStatus">Barang Ditemukan</div>
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
                                <button id="modalClaimButton" class="btn-primary">Ajukan Klaim</button>
                                <button id="modalCloseButton" class="btn-secondary">Tutup</button>
                            </div>
                        </div>
                    </div>`;
                    document.body.insertAdjacentHTML('beforeend', modalHTML);
                }
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
            const modalClaimButton = document.getElementById('modalClaimButton');

            modalClaimButton.addEventListener('click', function() {
                alert('Anda telah mengajukan klaim untuk barang ini. Silahkan datang ke staff admin di ruang staff.');
                closeModal();
            });

            const detailButtons = document.querySelectorAll('.button.ditemukan');

            detailButtons.forEach(button => {

                // Remove any existing event listeners (to prevent duplicates)
                const newButton = button.cloneNode(true);
                button.parentNode.replaceChild(newButton, button);

                newButton.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-item-id');

                    console.log('Clicked item ID:', itemId);

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