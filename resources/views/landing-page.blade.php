{{-- ini landing page

<a href="{{ url('/dashboard') }}">dashboard</a>

<a href="{{ url('/register') }}">register</a>

<a href="{{ url('/layout_admin') }}">admin</a> --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Campus Lost & Found</title>
    <style>
        :root {
            --color-primary: #0C3A2F;
            --color-secondary: #6D9773;
            --color-background-light: #CAD9CC;
            --color-yellow: #FFBA00;
            --color-red: #CD310B;
            --color-linear: linear-gradient(to bottom, #CAD9CC, #e8f0e9, #eaddba);
            --border-radius: 10px;
            --btn-radius: 20px;
            --photo-border-radius: 15px;
            --card-padding: 15px;
            --btn-padding: 8px 16px;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: sans-serif;
            background: var(--color-linear);
            color: var(--color-primary);
            overflow-x: hidden;
        }
        
        /* Splash screen */
        #splash {
            position: fixed;
            width: 100vw;
            height: 100vh;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }
        #splash img {
            width: 150px;
            animation: pulse 1.5s ease-in-out infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.8; }
            100% { transform: scale(1); opacity: 1; }
        }
        
        #main-content {
            display: none;
            animation: fadeIn 1s ease forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Navigation */
        .navbar {
            padding: 10px 20px;
            background: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            width: 182px;
        }

        .logo img {
            height: 35px;
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--color-primary);
            font-weight: 500;
        }
        
        .nav-links a.active {
            font-weight: bold;
            border-bottom: 2px solid var(--color-primary);
        }
        
        .auth-buttons {
            display: flex;
            gap: 10px;
        }
        
        .btn {
            padding: var(--btn-padding);
            border-radius: var(--btn-radius);
            border: none;
            cursor: pointer;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        
        .btn-outline {
            border: 1px solid var(--color-primary);
            color: var(--color-primary);
            background: transparent;
        }
        
        .btn-filled {
            background: var(--color-primary);
            color: white;
        }
        
        /* Hero Section */
        .hero {
            padding: 0;
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        
        .hero-image {
            width: 100%;
            height: 440px;
            object-fit: cover;
            margin-bottom: 20px;
            border-radius: var(--photo-border-radius);
        }
        
        /* Main content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Brand Logo Section */
        .brand-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0 40px;
            scroll-margin-top: 80px; /* Untuk scroll smooth */
        }
        
        .brand-logo {
            width: 200px;
            height: 200px;
            overflow: hidden;
        }
        
        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .brand-info {
            flex: 1;
            padding-left: 40px;
        }
        
        .brand-info h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .brand-info p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        /* Features Section */
        .features-section {
            scroll-margin-top: 80px; /* Untuk scroll smooth */
        }
        
        .features-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .feature-card {
            background: var(--color-primary);
            color: white;
            border-radius: var(--border-radius);
            padding: var(--card-padding);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 180px;
        }
        
        .feature-card h3 {
            margin: 15px 0;
            text-transform: uppercase;
            font-weight: bold;
        }
        
        .feature-card p {
            font-size: 14px;
        }
        
        .feature-icon {
            height: 80px;
            width: 80px;
            margin-bottom: 10px;
        }
        
        /* Contact Section */
        .contact-section {
            background: var(--color-primary);
            border-radius: var(--border-radius);
            padding: 30px;
            margin-bottom: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            scroll-margin-top: 80px; /* Untuk scroll smooth */
        }
        
        .contact-form {
            color: white;
        }
        
        .contact-form h3 {
            margin-bottom: 15px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }
        
        .form-group textarea {
            height: 80px;
            resize: none;
        }
        
        .send-btn {
            background: var(--color-yellow);
            color: var(--color-primary);
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            cursor: pointer;
            float: right;
            transition: all 0.3s ease;
        }
        
        .send-btn:hover {
            background: #e0a500;
            transform: translateY(-2px);
        }
        
        .send-btn:active {
            transform: translateY(0);
        }
        
        .contact-info {
            color: white;
            padding: 0px 20px;
            text-align: center;
        }
        
        .contact-info h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .contact-detail {
            margin-bottom: 15px;
        }
        
        .contact-detail p {
            margin-bottom: 5px;
        }
        
        .contact-logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .contact-logo img {
            width: 150px;
            height: 150px;
        }
        
        /* Footer */
        footer {
            background: #f0f0f0;
            padding: 10px 0;
            text-align: center;
            font-size: 14px;
        }
        
        footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        footer img {
            height: 30px;
        }
        
        /* Modal styles dihapus karena sudah tidak digunakan */
        
        /* Success Message */
        .success-message {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--color-primary);
            color: white;
            padding: 15px 20px;
            border-radius: var(--border-radius);
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            z-index: 1000;
            animation: slideIn 0.3s ease-in-out;
        }
        
        @keyframes slideIn {
            from {transform: translateX(100%);}
            to {transform: translateX(0);}
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .brand-section {
                flex-direction: column;
                text-align: center;
            }
            
            .brand-info {
                padding-left: 0;
                margin-top: 20px;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
            
            .contact-section {
                grid-template-columns: 1fr;
            }
            
            .navbar {
                flex-direction: column;
                gap: 10px;
            }
            
            .nav-links {
                order: 3;
                width: 100%;
                justify-content: space-around;
            }
        }
    </style>
</head>
<body>
    <!-- Splash Screen -->
    <div id="splash">
        <img src="{{ asset('assets/CampusLost&Found.png') }}" alt="Logo Splash">
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <!-- Navigation -->
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('assets/CampusLost&Found.png') }}" alt="Campus Lost & Found">
            </div>
            <div class="nav-links">
                <a href="#contact" id="contact-nav">Contact Us</a>
                <a href="#features" id="features-nav">About</a>
                <a href="#welcome" id="home-nav" class="active">Home</a>
            </div>
            <div class="auth-buttons">
                <a href="{{ url('/register') }}" class="btn btn-outline">Sign Up</a>
                <a href="{{ url('/login') }}" class="btn btn-filled">Sign In</a>
            </div>
        </nav>

        <!-- Hero Image -->
        <section class="hero">
            <div class="container">
                <img class="hero-image" src="{{ asset('assets/landingsofa.png') }}" alt="Living Room Interior">
            </div>
        </section>

        <!-- Brand Section -->
        <div class="container">
            <section id="welcome" class="brand-section">
                <div class="brand-logo">
                    <img src="{{ asset('assets/CampusLost&Found.png') }}" alt="Campus Lost & Found Logo">
                </div>
                <div class="brand-info">
                    <h1>Welcome...^^</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </section>

            <!-- Features Section -->
            <section id="features" class="features-section">
                <h2 class="features-title">Fitur Utama Kami</h2>
                <div class="features">
                    <div class="feature-card">
                        <img src="{{ asset('assets/baggg.png') }}" alt="Lost foto" class="feature-icon">
                        <h3>LOST</h3>
                        <p>Fitur untuk melapor kehilangan di sekitar kampus</p>
                    </div>
                    <div class="feature-card">
                        <img src="{{ asset('assets/foundd.png') }}" alt="Found Foto" class="feature-icon">
                        <h3>FOUND</h3>
                        <p>Fitur untuk melapor barang yang ditemukan</p>
                    </div>
                    <div class="feature-card">
                        <img src="{{ asset('assets/cari.png') }}" alt="Cari Logo" class="feature-icon">
                        <h3>CARI</h3>
                        <p>Temukan barang yang hilang dan laporkan barang yang ditemui</p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="contact-section">
                <div class="contact-form">
                    <h3>Send Us Message</h3>
                    <form id="contact-form">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <textarea id="message" placeholder="Type something..."></textarea>
                        </div>
                        <button type="button" id="send-message-btn" class="send-btn">Send</button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <h2>Contact Us</h2>
                    <div class="contact-detail">
                        <p>Email</p>
                        <p>campus.lost.found@gmail.com</p>
                    </div>
                    <div class="contact-detail">
                        <p>Instagram</p>
                        <p>@campus.lost&found</p>
                    </div>
                    <div class="contact-detail">
                        <p>Twitter</p>
                        <p>@campus.lost&found</p>
                    </div>
                    <div class="contact-detail">
                        <p>WhatsApp</p>
                        <p>+021 3456 3968</p>
                    </div>
                    <div class="contact-detail">
                        <p>TikTok</p>
                        <p>@campus.lost&found</p>
                    </div>
                </div>
                
                <div class="contact-logo">
                    <img src="{{ asset('assets/CampusLost&Found.png') }}" alt="Campus Lost & Found Logo">
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <img src="{{ asset('assets/CampusLost&Found.png') }}" alt="Campus Lost & Found">
                <p>© Copyright by Kelompok 5. All rights reserved</p>
            </div>
        </footer>
    </div>
    
    <!-- Modal signup dan signin dihapus karena sudah ada halaman terpisah -->
    
    <!-- Success Message -->
    <div id="success-message" class="success-message">
        Message sent successfully!
    </div>

    <script>
        // Splash screen effect
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const splash = document.getElementById('splash');
                splash.style.opacity = '0';
                
                setTimeout(function() {
                    splash.style.display = 'none';
                    document.getElementById('main-content').style.display = 'block';
                }, 500);
            }, 2000); // Splash screen will show for 2 seconds
            
            // Smooth scrolling for navigation
            document.getElementById('home-nav').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('welcome').scrollIntoView({ behavior: 'smooth' });
                setActiveNavLink(this);
            });
            
            document.getElementById('features-nav').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('features').scrollIntoView({ behavior: 'smooth' });
                setActiveNavLink(this);
            });
            
            document.getElementById('contact-nav').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
                setActiveNavLink(this);
            });
            
            function setActiveNavLink(clickedLink) {
                // Remove active class from all links
                document.querySelectorAll('.nav-links a').forEach(link => {
                    link.classList.remove('active');
                });
                
                // Add active class to clicked link
                clickedLink.classList.add('active');
            }
            
            // Send message button functionality
            document.getElementById('send-message-btn').addEventListener('click', function() {
                const email = document.getElementById('email').value;
                const message = document.getElementById('message').value;
                
                if (email && message) {
                    // Simulasi pengiriman pesan
                    document.getElementById('contact-form').reset();
                    
                    // Tampilkan pesan sukses
                    const successMessage = document.getElementById('success-message');
                    successMessage.style.display = 'block';
                    
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 3000);
                } else {
                    alert('Please fill in all fields');
                }
            });
            
            // Kode untuk modal sudah dihapus karena menggunakan halaman terpisah
        });
    </script>
</body>
</html>