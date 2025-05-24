@extends('admin.layout_admin')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
@endsection

@section('content')
   <!-- Profile Container -->
<div class="profile-container">
 <!-- Profile Avatar Section -->
 <div class="avatar-section">
    <div class="avatar-circle">
      <img src="assets/profil.png" alt="Cat Profile" class="avatar-image" />
    </div>
  </div>
  
  <!-- Profile Info -->
  <div class="profile-info">

    <h1 class="profile-title">{{ $user->nama }}</h1>
    <p class="profile-email">{{ $user->email }}</p>
    
    <!-- Profile Details -->
    <div class="profile-details">
      <div class="detail-row">
        <div class="detail-item">
          <h3 class="detail-label">Nama Pengguna</h3>
          <p class="detail-value">{{ $user->nama }}</p>
        </div>
        
        <div class="detail-item">
          <h3 class="detail-label">NIP</h3>
          <p class="detail-value">{{ $user->nip ?? '-' }}</p>
        </div>
        
        <div class="detail-item">
          <h3 class="detail-label">Departemen</h3>
          <p class="detail-value">{{ $user->departemen ?? '-' }}</p>
        </div>
        
        <div class="detail-item">
          <h3 class="detail-label">E-Mail</h3>
          <p class="detail-value">{{ $user->email }}</p>
        </div>
      </div>
    </div>
    
    <!-- Edit Profile Button -->
    <div class="button-container">
      <button class="edit-button" id="openEditModal">Edit Profil</button>
    </div>
  </div>
  
  <!-- General Section Title -->
  {{-- <div class="section-title">
    <h2>UMUM</h2>
  </div> --}}
  
  <!-- Menu Cards -->
  {{-- <div class="menu-cards">
    <div class="card">
      <h3>Laporan Saya</h3>
      <p>Lihat laporan barang Anda dan pilih barang temuan yang disimpan saat menggunakan Campus Lost&Found</p>
    </div>
    
    <div class="card">
      <h3>Riwayat Pencarian</h3>
      <p>Lihat riwayat pencarian barang Anda pada beranda Campus Lost&Found</p>
    </div>
    
    <div class="card">
      <h3>Ganti Kata Sandi</h3>
      <p>Lihat dan periksa kata sandi akun Campus Lost&Found Anda disini.</p>
    </div>
    
    <div class="card">
      <h3>Hubungi Kami</h3>
      <p>Apabila terdapat pertanyaan, silahkan hubungi pihak Campus Lost&Found disini.</p>
    </div>
  </div> --}}
  
  <!-- Edit Profile Modal -->
  <div id="editProfileModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Edit Profil</h2>
        <span class="close-modal">&times;</span>
      </div>
      <div class="modal-body">
        <!-- Profile Picture Section -->
        <div class="modal-avatar-section">
          <div class="modal-avatar-circle">
            <img src="assets/profil.png" alt="Cat Profile" class="modal-avatar-image" />
          </div>
        </div>
        
        <!-- Form Fields -->
        <form id="editProfileForm">
          <div class="form-group">
            <label for="nameInput">Nama Pengguna</label>
            <input type="text" id="nameInput" name="nama" class="form-input" value="{{ $user->nama }}" />
          </div>
          
          <div class="form-group">
            <label for="nipInput">NIP</label>
            <input type="text" id="nipInput" name="nip" class="form-input" value="{{ $user->nip }}" />
          </div>
          
          <div class="form-group">
            <label for="departemenInput">Departemen</label>
            <input type="text" id="departemenInput" name="departemen" class="form-input" value="{{ $user->departemen }}" />
          </div>
          
          <div class="form-group">
            <label for="emailInput">E-Mail</label>
            <input type="email" id="emailInput" name="email" class="form-input" value="{{ $user->email }}" />
          </div>
          
          <div class="form-actions">
            <button type="button" class="cancel-button" id="cancelEdit">Batal</button>
            <button type="submit" class="save-button">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<style>
  /* Profile Page Styles */
  .profile-container {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    background: var(--color-linear);
    border-radius: var(--border-radius);
    position: relative;
  }
  
  /* Avatar Section */
  .avatar-section {
    margin-top: 20px;
    margin-bottom: 20px;
  }
  
  .avatar-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background-color: #f9e4a0;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border: 5px solid white;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  
  .avatar-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  /* Profile Info */
  .profile-info {
    width: 100%;
    max-width: 800px;
    background-color: white;
    border-radius: var(--border-radius);
    padding: 30px;
    margin-bottom: 30px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  }
  
  .profile-title {
    margin: 0;
    font-size: 24px;
    color: black;
    font-weight: bold;
  }
  
  .profile-email {
    margin: 5px 0 20px;
    color: #666;
    font-size: 14px;
  }
  
  /* Profile Details */
  .profile-details {
    margin: 20px 0;
  }
  
  .detail-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
  }
  
  .detail-item {
    flex: 1;
    min-width: 150px;
    text-align: left;
  }
  
  .detail-label {
    margin: 0;
    font-size: 16px;
    color: var(--color-yellow);
    font-weight: bold;
  }
  
  .detail-value {
    margin: 5px 0 0;
    font-size: 16px;
    color: #333;
  }
  
  /* Button Styles */
  .button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  
  .edit-button {
    background-color: var(--color-primary);
    color: white;
    border: none;
    border-radius: var(--btn-radius);
    padding: 8px 30px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .edit-button:hover {
    background-color: #0a2e26;
  }
  
  /* Section Title */
  .section-title {
    width: 100%;
    max-width: 800px;
    text-align: left;
    margin-bottom: 20px;
  }
  
  .section-title h2 {
    color: var(--color-primary);
    font-size: 24px;
    font-weight: bold;
    margin: 0;
  }
  
  /* Menu Cards */
  .menu-cards {
    width: 100%;
    max-width: 800px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
  }
  
  .card {
    background-color: var(--color-secondary);
    border-radius: var(--border-radius);
    padding: 20px;
    color: white;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .card:hover {
    background-color: #0e5245; /* Slightly darker shade for hover */
  }
  
  .card.active {
    background-color: #0a2e26; /* Darker green when clicked/active */
  }
  
  .card h3 {
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
  }
  
  .card p {
    margin: 0;
    font-size: 14px;
    line-height: 1.5;
  }
  
  /* Modal Styles */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    overflow: auto;
  }
  
  .modal-content {
    background-color: #fff;
    margin: 5% auto;
    max-width: 600px;
    width: 90%;
    border-radius: var(--border-radius);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    position: relative;
    animation: modalFadeIn 0.3s;
  }
  
  @keyframes modalFadeIn {
    from {opacity: 0; transform: translateY(-20px);}
    to {opacity: 1; transform: translateY(0);}
  }
  
  .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    border-bottom: 1px solid #eee;
  }
  
  .modal-header h2 {
    margin: 0;
    font-size: 20px;
    color: var(--color-primary);
  }
  
  .close-modal {
    font-size: 28px;
    font-weight: bold;
    color: #777;
    cursor: pointer;
    transition: color 0.2s;
  }
  
  .close-modal:hover {
    color: #333;
  }
  
  .modal-body {
    padding: 20px;
  }
  
  .modal-avatar-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .modal-avatar-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: #f9e4a0;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    position: relative;
    border: 3px solid white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }
  
  .modal-avatar-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .profile-notice {
    margin-top: 10px;
    font-size: 14px;
    color: #666;
    font-style: italic;
  }
  
  /* Form Styles */
  .form-group {
    margin-bottom: 15px;
  }
  
  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
    color: #555;
  }
  
  .form-input {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
  }
  
  .form-input:focus {
    border-color: var(--color-secondary);
    outline: none;
    box-shadow: 0 0 0 2px rgba(109, 151, 115, 0.2);
  }
  
  .form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 20px;
  }
  
  .cancel-button {
    background-color: #eee;
    color: #333;
    border: none;
    border-radius: var(--btn-radius);
    padding: 8px 20px;
    font-size: 15px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .save-button {
    background-color: var(--color-primary);
    color: white;
    border: none;
    border-radius: var(--btn-radius);
    padding: 8px 20px;
    font-size: 15px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .cancel-button:hover {
    background-color: #ddd;
  }
  
  .save-button:hover {
    background-color: #0a2e26;
  }
  
  /* Responsive Design */
  @media (max-width: 768px) {
    .menu-cards {
      grid-template-columns: 1fr;
    }
    
    .detail-row {
      flex-direction: column;
      gap: 10px;
    }
    
    .modal-content {
      width: 95%;
      margin: 10% auto;
    }
  }
</style>

<script>
  // Wait for DOM content to be loaded
  document.addEventListener('DOMContentLoaded', function() {
    // Get modal elements
    const modal = document.getElementById('editProfileModal');
    const openModalBtn = document.getElementById('openEditModal');
    const closeModalBtn = document.querySelector('.close-modal');
    const cancelBtn = document.getElementById('cancelEdit');
    const editForm = document.getElementById('editProfileForm');
    
    // Get all card elements
    const cards = document.querySelectorAll('.card');
    
    // Add click event listeners to all cards
    cards.forEach(card => {
      card.addEventListener('click', function() {
        // First, remove 'active' class from all cards
        cards.forEach(c => c.classList.remove('active'));
        
        // Then add 'active' class to the clicked card
        this.classList.add('active');
        
        // You can add additional functionality here when a card is clicked
      });
    });
    
    // Function to open the modal
    function openModal() {
      modal.style.display = 'block';
      document.body.style.overflow = 'hidden'; // Prevent scrolling behind modal
    }
    
    // Function to close the modal
    function closeModal() {
      modal.style.display = 'none';
      document.body.style.overflow = ''; // Enable scrolling again
    }
    
    // Event listeners for opening and closing modal
    openModalBtn.addEventListener('click', openModal);
    closeModalBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    
    // Close modal when clicking outside the modal content
    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        closeModal();
      }
    });
    
    // Handle form submission
    editForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from submitting traditionally
      
      // const formData = new FormData(editForm);

      // Get form values
      const name = document.getElementById('nameInput').value;
      const nip = document.getElementById('nipInput').value;
      const departemen = document.getElementById('departemenInput').value;
      const email = document.getElementById('emailInput').value;
      
      // Update profile information on the main page
      document.querySelector('.profile-title').textContent = name;
      document.querySelector('.profile-email').textContent = email;
      
      // Update detail values
      const detailValues = document.querySelectorAll('.detail-value');
      detailValues[0].textContent = name; // Nama Pengguna
      detailValues[1].textContent = nip;  // NPM
      detailValues[2].textContent = departemen; // prodi
      detailValues[3].textContent = email; // E-Mail
      
      // Close the modal
      closeModal();
      
      // You could add code here to send the updated data to a server
      // Send the updated data to the server (Laravel)
      fetch('/profil/update', {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token
        },
        body: JSON.stringify({
            nama: name,
            nip: nip,
            departemen: departemen,
            email: email
        })
      })

      .then(response => response.json())
      .then(data => {
        if (data.success) {
            alert('Profil berhasil diperbarui!');
            closeModal();
        } else {
            alert('Terjadi kesalahan saat menyimpan.');
        }
      })

      .catch(error => {
        console.error('Error:', error);
        alert('Gagal mengirim data.');
      });

    });
  });
</script>
<script src="{{ asset('js/app.js') }}"></script>
@endsection