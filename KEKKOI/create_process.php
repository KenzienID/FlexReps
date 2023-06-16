<!DOCTYPE html>
<html>
<head>
    <title>Web CRUD - Buat Data Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <span class="navbar-logo">Web CRUD</span>
        <div class="navbar-links">
            <a href="index.php">Home</a>
            <a href="#">Create</a>
            <a href="#">Read</a>
            <a href="#">Update</a>
            <a href="#">Delete</a>
        </div>
    </nav>

    <div class="container">
        <h1>Buat Data Baru</h1>
        <form action="create_process.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Simpan" class="button">
        </form>
    </div>

    <script src="assets/script.js"></script>
</body>
</html>
