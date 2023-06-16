<?php
// Lakukan verifikasi akses level pengguna di halaman ini
// Pastikan hanya pengguna dengan level "User" yang dapat mengakses halaman ini
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
  // Jika belum login, arahkan pengguna ke halaman login
  header("Location: login.php");
  exit();
}

// Periksa level pengguna
if ($_SESSION['userLevel'] != 'user') {
  // Jika bukan pengguna dengan level "User", tampilkan pesan akses ditolak atau arahkan pengguna ke halaman yang sesuai
  // ...
}

// Jika level pengguna adalah "User", tampilkan halaman dashboard untuk pengguna
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="style.css"> <!-- Ganti dengan path CSS Anda -->
</head>
<body>
  <nav>
    <div class="navbar">
      <div class="brand">
        <h1>My Website</h1>
      </div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="user_dashboard.php">User Dashboard</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

  <section class="container">
    <h1>Welcome, User!</h1>
    <p>Here is your user dashboard.</p>
    <!-- Tampilkan konten halaman -->
  </section>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
  </footer>
</body>
</html>
