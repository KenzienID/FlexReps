<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> <!-- Ganti dengan path CSS Anda -->
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <select name="level" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>

            </div>
            <div class="form-group">
                <button type="submit">Login</button>
                <p>belum punya akun?daftar 
                <a href="register.php">sekarang</a></p>
            </div>
        </form>
    </div>
</body>

</html>