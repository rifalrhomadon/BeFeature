<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "rifalrhomadon" && $password == "rifqi1234") {
        $_SESSION["username"] = $username;

        header("Location: admin.php");
        exit();
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be Feature</title>
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
		<header>
            <nav>
                <div class="logo">
                    <img src="assets/logo.png" alt="Logo" />
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
			<form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<h1>Login</h1>
				<div class="input-field">
					<input type="text" name="username" placeholder="Username" required>
				</div>
				<div class="input-field">
					<input type="password" name="password" placeholder="Password" required>
				</div>
				<button type="submit" class="btn-login">Login</button>
                <?php
                if (isset($error)) {
                    echo "<p>$error</p>";
                }
                ?>
			    <p>Don't have an account? <a href="register.php">Register</a></p>
			</form>
		</main>
		<footer>
            <h4>&copy; Be Feature 2024</h4>
        </footer>
    </div>
</body>

</html>
