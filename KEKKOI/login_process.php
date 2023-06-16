<?php
session_start();

require 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username dan password terisi
if (!empty($username) && !empty($password)) {
    // Query untuk mengambil data user berdasarkan username
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Jika user ditemukan
    if ($user) {
        $storedPassword = $user['password'];

        // Verifikasi password
        if (password_verify($password, $storedPassword)) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['level'] = $user['level'];

            if ($user['level'] == 'admin') {
                header('Location: admin_dashboard.php');
                exit();
            } else {
                header('Location: user_dashboard.php');
                exit();
            }
        } else {
            // Password tidak cocok
            $_SESSION['login_error'] = 'Invalid username or password';
        }
    } else {
        // User tidak ditemukan
        $_SESSION['login_error'] = 'Invalid username or password';
    }
} else {
    // Username atau password kosong
    $_SESSION['login_error'] = 'Please enter username and password';
}

// Redirect kembali ke halaman login
header('Location: login.php');
exit();
?>
