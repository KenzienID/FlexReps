<!DOCTYPE html>
<html>
<head>
    <title>Web CRUD - About Us</title>
    <link rel="stylesheet" href="style.css">
    <!-- ... -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
    <!-- ... -->
    <style>
        .slider {
  width: 80% !important;
  margin: 0 auto !important;
}

.slick-slide {
    display: flex !important;
    justify-content: center !important;
    text-align: center !important;
}
.slider {
  width: 80% !important;
  margin: 0 auto !important;
}

.slick-slide {
  text-align: center !important;
}
    </style>
    
</head>
<body>
    <nav class="navbar">
    <nav class="navbar">
        <span class="navbar-logo">MASTER-LAPTOP/HI-COMTEC  </span>
        <br>    
            <div class="navbar-links">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
        </div>
    </nav>
    </nav>
    <body>
    <!-- ... -->
        <!-- ... -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
        <script>
            
            $(document).ready(function(){
                $('.slider').slick({
                    autoplay: true, // Mengaktifkan autoplay
                    autoplaySpeed: 3500, // Durasi per slide dalam milidetik
                    arrows: false, // Menonaktifkan tombol panah navigasi
                    dots: true // Menampilkan titik navigasi
                });
            });
        
    </script>
</body>
    
    <div class="container">
        <h1>About Us</h1>
        
        <p>Master-Laptop ini telah berdiri sejak tahun 2009, berjalan bersama dengan Hi-Comtec yang sudah ada semenjak tahun 2001 </p>
        <p>Kami tidak membuka cabang dikota lain(nama sama belum tentu perusahaan kami dan berhati hatilah anda dengan modus penipuan yang menggunakan nama perusahaan kami)</p>
        <p>lebih jelas nya silahkan anda berkunjung di website resmi kami <a href="https://www.master-laptop.com">www.master-laptop.com</a></p>
        
        <a href="index.php" class="button">Kembali ke Beranda</a>
    </div>
    <div class="slider">
            <div><img src="img/wa.jpg" alt="Image 1"></div>
            <div><img src="img/wa.jpg" alt="Image 2"></div>
            <div><img src="img/wa.jpg" alt="Image 3"></div>
        </div>
    <script src="script.js"></script>
</body>
</html>
