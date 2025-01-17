<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>E-Commerce Website</h1>
        <nav>
            <ul>
                <li><a href="index.php"><img src="images/home.png" alt="Register"><span>Home</span></a></li>
                <li><a href="cart.php"><img src="images/cart.png" alt="View Cart"><span>My Cart</span></a></li>
                <li><a href="register.php"><img src="images/register.png" alt="Register"><span>Register</span></a></li>
                <?php
                session_start();
                if (isset($_SESSION['user_id'])) {
                    echo '<li><a href="logout_user.php"><img src="images/log-out.png" alt="Logout"><span>Log Out</span></a></li>';
                } else {
                    echo '<li><a href="login.php"><img src="images/log-in.png" alt="Login"><span>Log In</span></a></li>';
                }
                ?>
            </ul>
        </nav>
    </header> 
    <main>
        <section>
            <h2 align="center">Successfully Logged Out!</h2>
            <a href="index.php"><button class="center">Back to Home</button></a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024<br>Anika Khan<br>ID: 110103345</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
