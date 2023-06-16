<?php
session_start();
require_once 'conn.php';

// Ambil data dari form pendaftaran
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$userLevel = 'user'; // Level user "User"

// Cek apakah username sudah ada dalam database
$query = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $_SESSION['register_error'] = "Username sudah digunakan. Silakan gunakan username lain.";
    header("Location: register.php");
    exit();
}

// Hash password sebelum disimpan ke database
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert data pengguna baru ke dalam tabel users
$query = "INSERT INTO users (username, password, name, level) VALUES ('$username', '$hashedPassword', '$name', '$userLevel')";
$_SESSION['register_success'] = "Akun berhasil terdaftar. Silakan login.";
if ($conn->query($query) === TRUE) {
    header("Location: register_success.php");
    exit();
} else {
    $_SESSION['register_error'] = "Terjadi kesalahan saat mendaftar. Silakan coba lagi.";
    header("Location: register.php");
    exit(); 
}
?>
s 