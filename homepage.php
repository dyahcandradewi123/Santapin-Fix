<?php
session_start(); 

if (!isset($_SESSION['user'])) {
    header('Location: login.php'); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santapin - Pilih UMKM</title>
    <link rel="stylesheet" href="homepage.css">
    <link href="homepage.css" rel="stylesheet">

</head>
<body>
    <header class="navbar">
        <div class="navbar-container">
            <h1 class="logo">Santapin</h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="pencarian.html">UMKM</a></li>
                    <li><a href="pencarian.html">Lokasi</a></li>
                    <li><a href="#">Profil</a></li>
                </ul>
            </nav>
            <a href="logout.php" class="btn-logout">Log Out</a>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="hero">
    <div class="hero-content">
        <p class="welcome-text">Selamat datang 
        <?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?>, di</p>
        <h1 class="title">Santapin</h1>
        <p class="subtitle1">
            Temukan tempat makan terbaik dan rencanakan petualangan kuliner Anda dengan mudah. Jelajahi rekomendasi yang sesuai selera, simpan favorit, dan akses peta interaktif untuk menemukan lokasi terdekat.
        </p>
        <a href="pencarian.html" class="btn-pilih">Pilih UMKM</a>
    </div>
</section>

    <div class="container">
        <div class="image-container"></div>
        <div class="text-container">
            <h2>Temukan UMKM Anda dengan Menu Spesial Setiap Hari</h2>
            <p>Nikmati pengalaman bersantap yang istimewa dengan berbagai pilihan menu spesial dari berbagai UMKM setiap harinya. Dari hidangan khas daerah hingga kreasi unik yang dibuat dengan bahan-bahan segar dan berkualitas, setiap sajian menawarkan cita rasa autentik yang memanjakan lidah. Temukan menu favorit Anda dan dukung UMKM lokal dengan menikmati kelezatan yang berbeda setiap harinya!</p>
        </div>
    </div>

    <!-- Section: Why Choose Us -->
    <section class="why-us">
        <h2>Kenapa memilih Santapin?</h2>
        <div class="stats-container">
            <div class="stat">
                <p>500.000+</p>
                <p>pengguna terdaftar</p>
            </div>
            <div class="stat">
                <p>1.000.000+</p>
                <p>reservasi terselesaikan</p>
            </div>
            <div class="stat">
                <p>10.000+</p>
                <p>UMKM terhubung</p>
            </div>
        </div>
    </section>

    <!-- Section: Top UMKM -->
    <section class="top-umkm">
        <h2>TOP UMKM</h2>
        <div class="umkm-container">
            <div class="umkm">
                <a href="profil_umkm.html">
                <img src="images/bakmie.webp"Bakmie Sadja">
                <div class="umkm-info">
                    <h3>Bakmie Sadja</h3>
                    <p>Jalan Kertoaji 67, Sumbersari Kota Malang</p>
                </a>
                </div>
            </div>
            <div class="umkm">
                <img src="images/daon bakar.jpg" alt="Daon Bakar">
                <div class="umkm-info">
                    <h3>Daon Bakar</h3>
                    <p>Jalan Kertoaji 67, Sumbersari Kota Malang</p>
                </div>
            </div>
            <div class="umkm">
                <img src="images/pizza.webp" alt="Cota Slice">
                <div class="umkm-info">
                    <h3>Cota Slice</h3>
                    <p>Jalan Kertoaji 67, Sumbersari Kota Malang</p>
                </div>
            </div>
            <div class="umkm">
                <img src="images/mie goreng ayam.jpg" alt="Warung Kita">
                <div class="umkm-info">
                    <h3>Warung Kita</h3>
                    <p>Jalan Kertoaji 67, Sumbersari Kota Malang</p>
                </div>
            </div>
            <div class="umkm">
                <img src="images/lemon tea.webp" alt="Lala Space">
                <div class="umkm-info">
                    <h3>Lala Space</h3>
                    <p>Jalan Kertoaji 67, Sumbersari Kota Malang</p>
                </div>
            </div>
            <div class="umkm">
                <img src="images/dessert.jpeg" alt="Dessert by Lita">
                <div class="umkm-info">
                    <h3>Dessert by Lita</h3>
                    <p>Jalan Kertoaji 67, Sumbersari Kota Malang</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Testimonials -->
    <section class="testimonials">
        <h2>Apa kata mereka?</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <p>"Bakalan pakai santapin terus"</p>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                <div class="user">
                    <img src="images/yanto.jpeg" alt="Yanto">
                    <h3>Yanto</h3>
                </div>
            </div>
            <div class="testimonial">
                <p>"I Love it!"</p>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                <div class="user">
                    <img src="images/tanboy kun.jpeg" alt="Tanboy Kun">
                    <h3>Tanboy Kun</h3>
                </div>
            </div>
            <div class="testimonial">
                <p>"Praktis banget!"</p>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                <div class="user">
                    <img src="images/ronaldo.webp" alt="Ronaldo">
                    <h3>Ronaldo</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Santapin</h3>
                <ul class="footer-contact">
                    <li><i class="fa fa-phone"></i> +62 424 954 824</li>
                    <li><i class="fa fa-envelope"></i> santapin@gmail.com</li>
                    <li><i class="fa fa-map-marker"></i> Jakarta Selatan</li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>About Us</h3>
                <p>
                    Santapin adalah platform yang mendukung UMKM lokal dengan berbagai fitur yang menarik dan memudahkan pengguna memilih restoran terbaiknya.
                </p>
            </div>
            <div class="footer-column">
                <h3>Quicklink</h3>
                <ul class="footer-links">
                    <li><a href="homepage.html">Home</a></li>
                    <li><a href="pencarian.html">Pencarian</a></li>
                    <li><a href="reservasi_buat.html">Reservasi</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Gallery</h3>
                <div class="footer-gallery">
                    <img src="images/bakmie.webp">
                    <img src="images/pizza.webp">
                    <img src="images/daon bakar.jpg">
                    <img src="images/es buah.webp">
                </div>
                <a href="#" class="see-more">See More</a>
            </div>
        </div>
        <div class="footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
        </div>
    </footer>

    <script src="homepage.js"></script>
</body>
</html>