<!DOCTYPE html>
<html>
<head>
    <title>Web CRUD - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        session_start();

        // Periksa apakah pengguna sudah login
        if (isset($_SESSION['username']) && isset($_SESSION['name'])) {
            $username = $_SESSION['username'];
            $name = $_SESSION['name'];
            
            echo '<h1>Selamat Datang, ' . $name . '!</h1>';
            echo '<p>Anda telah berhasil login sebagai ' . $username . '</p>';
            echo '<a href="logout.php" class="button">Logout</a>';
        } else {
            // Jika pengguna belum login, arahkan ke halaman login
            header("Location: login.php");
            exit();
        }
        ?>
    </div>
    
    <script src="assets/script.js"></script>
</body>
</html>
