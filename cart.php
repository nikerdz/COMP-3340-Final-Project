<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <button onclick="topFunction()" id="topButton" title="Go to top">Back to Top</button>
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
        <div class="container">
            <div class="main-content">
                <section>
                    <?php
                    session_start();
                    if (isset($_SESSION['user_id'])) {
                        echo '<h2>' . $_SESSION['first_name'] . "'s Shopping Cart</h2>";
                    } else {
                        echo '<h2>Guest Shopping Cart</h2>';
                    }
                    ?>
                    <div class="cart">
                    </div>
                </section>
            </div>
            <aside class="sidebar">
                <section>
                    <h2>Cart Total:</h2>
                    <div class="total">
                    </div>
                </section>
            </aside>

        </div>
    </main>
    <footer>
        <p>&copy; 2024<br>Anika Khan<br>ID: 110103345</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
