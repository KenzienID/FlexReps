<!DOCTYPE html>
<html>
<head>
    <title>Web CRUD - Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="container">
        <h1>Register</h1>
        
        <form action="register_process.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <input type="submit" value="Register" class="button">
        </form>
        
        <?php
        session_start();
        if (isset($_SESSION['register_error'])) {
            echo '<p class="error">' . $_SESSION['register_error'] . '</p>';
            unset($_SESSION['register_error']);
        }
        ?>
        
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    
    <script src="assets/script.js"></script>
</body>
</html>
