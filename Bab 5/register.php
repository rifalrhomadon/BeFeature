<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/icon.png" />
    <title>Register - K-pop Lightsticks</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="logo">
                    <img src="assets/logo.png" alt="" />
                </div>
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="categories/categories.php">Categories</a></li>
                    <li><a href="login.php" class="btn_login">Login</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form class="register-form">
                <h1>Register</h1>
                <div class="input-field">
                    <input type="text" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-register">Register</button>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
        </main>
        <footer>
            <h4>&copy; Be Feature 2024</h4>
        </footer>
    </div>
</body>

</html>
