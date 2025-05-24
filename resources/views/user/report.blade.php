@extends('user.layout')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/profil.css') }}">

<style>
    .report-container {
        display: flex;
        justify-content: space-between;
        padding: 30px 60px;
        max-width: 1300px;
        background: var(--color-linear);
        border-radius: var(--border-radius);
        margin: 0 auto;
    }

    .form-section {
        flex: 2;
    }

    .form-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 30px; /* <- ditambahin jarak */
        color: var(--color-primary);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .laporan-dropdown {
        font-size: 24px; 
        font-weight: bold;
        color: var(--color-yellow);
        border: none;
        background: transparent;
        appearance: none;
        padding-right: 25px;
        background-image: url("data:image/svg+xml;utf8,<svg fill='%23F4B400' height='20' viewBox='0 0 24 24' width='20' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 18px;
}


    .laporan-dropdown option {
        font-size: 12px !important; 
        color: #000 !important;
}

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px 20px;
    }

    .form-grid-double {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    label {
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: var(--border-radius);
        font-size: 14px;
    }

    textarea {
        resize: vertical;
        height: 100px;
    }

    .submit-button {
        margin-top: 20px;
        background-color: var(--color-primary);
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: var(--btn-radius);
        font-size: 16px;
        cursor: pointer;
    }

    .image-section {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image-section img {
        max-width: 100%;
        max-height: 350px;
        border-radius: var(--photo-border-radius);
    }

    .popup-sukses {
        display: none;
        margin-bottom: 15px;
        background-color: #d4edda;
        padding: 10px;
        border-radius: var(--border-radius);
        color: var(--color-primary);
        border: 1px solid var(--color-secondary);
    }

    .popup-gagal {
        display: none;
        margin-bottom: 15px;
        background-color:rgb(230, 91, 91);
        padding: 10px;
        border-radius: var(--border-radius);
        color: var(--color-primary);
        border: 1px solid var(--color-secondary);
    }

    .form-wrapper {
        display: none;
    }

    .form-wrapper.active {
        display: block;
    }
</style>
@endsection

@section('content')
<div class="report-container">
    <div class="form-section">
        <div class="form-title">
            Buat
            <select id="laporanSelect" class="laporan-dropdown">
                <option value="kehilangan" selected>Laporan Kehilangan</option>
                <option value="penemuan">Laporan Penemuan</option>
            </select>
        </div>

        <div class="popup-sukses" id="popup-sukses">Laporan berhasil dikirim!</div>
        <div class="popup-gagal" id="popup-gagal">Laporan gagal dikirim!</div>

        {{-- Form Kehilangan --}}
        <div id="form-kehilangan" class="form-wrapper active">
            
            <form id="formKehilangan" method="POST" action="/laporan-kehilangan" enctype="multipart/form-data">
                @csrf
                <div class="form-grid">
                    <div>
                        <label for="nama">Nama Pelapor</label>
                        <input type="text" id="nama" name="nama">
                    </div>
                    <div>
                        <label for="npm">NPM</label>
                        <input type="text" id="npm" name="npm">
                    </div>
                    <div>
                        <label for="prodi">Prodi</label>
                        <input type="text" id="prodi" name="prodi">
                    </div>
                    <div>
                        <label for="email">Email/No.HP</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div>
                        <label for="barang">Nama barang hilang</label>
                        <input type="text" id="barang" name="barang">
                    </div>
                    <div>
                        <label for="tanggal">Tanggal menghilang</label>
                        <input type="date" id="tanggal" name="tanggal">
                    </div>
                    <div>
                        <label for="deskripsi">Deskripsi barang</label>
                        <textarea id="deskripsi" name="deskripsi"></textarea>
                    </div>
                    <div>
                        <label for="foto">Unggah foto barang</label>
                        <input type="file" id="foto" name="foto" accept="image/*">
                    </div>
                </div>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>

        {{-- Form Penemuan --}}
        <div id="form-penemuan" class="form-wrapper">
           
            <form id="formPenemuan" method="POST" action="/laporan-penemuan" enctype="multipart/form-data">
                @csrf
                <div class="form-grid">
                    <div>
                        <label for="penemu">Nama Penemu</label>
                        <input type="text" id="penemu" name="penemu">
                    </div>
                    <div class="form-grid-double">
                        <div>
                            <label for="npm_penemu">NPM</label>
                            <input type="text" id="npm_penemu" name="npm_penemu">
                        </div>
                        <div>
                            <label for="telepon_penemu">No. HP</label>
                            <input type="text" id="telepon_penemu" name="telepon_penemu">
                        </div>
                    </div>
                    <div>
                        <label for="prodi_penemu">Prodi</label>
                        <input type="text" id="prodi_penemu" name="prodi_penemu">
                    </div>
                    <div>
                        <label for="lokasi">Lokasi ditemukan</label>
                        <input type="text" id="lokasi" name="lokasi">
                    </div>
                    <div>
                        <label for="barang_ditemukan">Nama barang ditemukan</label>
                        <input type="text" id="barang_ditemukan" name="barang_ditemukan">
                    </div>
                    <div>
                        <label for="tanggal_ditemukan">Tanggal ditemukan</label>
                        <input type="date" id="tanggal_ditemukan" name="tanggal_ditemukan">
                    </div>
                    <div>
                        <label for="deskripsi_penemuan">Deskripsi barang</label>
                        <textarea id="deskripsi_penemuan" name="deskripsi_penemuan"></textarea>
                    </div>
                    <div>
                        <label for="foto_penemuan">Unggah foto barang</label>
                        <input type="file" id="foto_penemuan" name="foto_penemuan" accept="image/*">
                    </div>
                </div>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </div>

    <div class="image-section">
        <img src="assets/hilang.png" alt="Ilustrasi Kehilangan/Penemuan">
    </div>
</div>

<script>
    const laporanSelect = document.getElementById('laporanSelect');
    const formKehilangan = document.getElementById('form-kehilangan');
    const formPenemuan = document.getElementById('form-penemuan');
    const popupSukses = document.getElementById('popup-sukses');
    const popupGagal = document.getElementById('popup-gagal');

    laporanSelect.addEventListener('change', () => {
        if (laporanSelect.value === 'kehilangan') {
            formKehilangan.classList.add('active');
            formPenemuan.classList.remove('active');
        } else {
            formPenemuan.classList.add('active');
            formKehilangan.classList.remove('active');
        }
    });

    // Tambah elemen buat error message
    function showError(input, message) {
        removeError(input); // Hapus jika udah ada
        const error = document.createElement('div');
        error.className = 'error-message';
        error.style.color = 'red';
        error.style.fontSize = '12px';
        error.style.marginTop = '4px';
        error.textContent = message;
        input.parentElement.appendChild(error);
        input.style.borderColor = 'red';
    }

    // Fungsi untuk menghapus error message
    function removeError(input) {
        const error = input.parentElement.querySelector('.error-message');
        if (error) error.remove();
        input.style.borderColor = '';
    }

    // Fungsi untuk menghapus semua error messages
    function clearErrors() {
        document.querySelectorAll('.error-message').forEach(el => el.remove());
        document.querySelectorAll('input, textarea').forEach(el => el.style.borderColor = '');
    }

    // Fungsi untuk validasi form
    function validateForm(form) {
        clearErrors();
        let isValid = true;
        const inputs = form.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                showError(input, 'Wajib diisi');
            }
        });
        return isValid;
    }

    document.getElementById('formKehilangan').addEventListener('submit', async function (e) {
        e.preventDefault();

        if (!validateForm(this)) {
            return; // Jika form tidak valid, jangan lanjutkan submit
        }

        const formData = new FormData(this);

        const response = await fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            this.reset();
            popupSukses.style.display = 'block';
            setTimeout(() => popupSukses.style.display = 'none', 3000);
        } else {
            popupGagal.style.display = 'block';
            setTimeout(() => popupGagal.style.display = 'none', 3000);
        }
    });

    document.getElementById('formPenemuan').addEventListener('submit', async function (e) {
        e.preventDefault();

        if (!validateForm(this)) {
            return; // Jika form tidak valid, jangan lanjutkan submit
        }

        const formData = new FormData(this);

        const response = await fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            this.reset();
            popupSukses.style.display = 'block';
            setTimeout(() => popupSukses.style.display = 'none', 3000);
        } else {    
            popupGagal.style.display = 'block';
            setTimeout(() => popupGagal.style.display = 'none', 3000);
        }

    });
</script>
@endsection