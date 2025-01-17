<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
        <h2 align="center">Browse Our Products Below!</h2>
        <div class="product" data-name="Product 1" data-price="10">
            <img src="images/1.jpg" alt="Product 1">
            <h2>Product 1</h2>
            <p>$10.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 2" data-price="10">
            <img src="images/2.jpg" alt="Product 2">
            <h2>Product 2</h2>
            <p>$10.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 3" data-price="15">
            <img src="images/3.jpg" alt="Product 3">
            <h2>Product 3</h2>
            <p>$15.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
            <div class="product" data-name="Product 4" data-price="15">
            <img src="images/4.jpg" alt="Product 4">
            <h2>Product 4</h2>
            <p>$15.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 5" data-price="12">
            <img src="images/5.jpg" alt="Product 5">
            <h2>Product 5</h2>
            <p>$12.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 6" data-price="10">
            <img src="images/6.jpg" alt="Product 6">
            <h2>Product 6</h2>
            <p>$10.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 7" data-price="12">
            <img src="images/7.jpg" alt="Product 7">
            <h2>Product 7</h2>
            <p>$12.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 8" data-price="8">
            <img src="images/8.jpg" alt="Product 8">
            <h2>Product 8</h2>
            <p>$8.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 9" data-price="15">
            <img src="images/9.jpg" alt="Product 9">
            <h2>Product 9</h2>
            <p>$15.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 10" data-price="15">
            <img src="images/10.jpg" alt="Product 10">
            <h2>Product 10</h2>
            <p>$15.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 11" data-price="10">
            <img src="images/11.jpg" alt="Product 11">
            <h2>Product 11</h2>
            <p>$10.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 12" data-price="10">
            <img src="images/12.jpg" alt="Product 12">
            <h2>Product 12</h2>
            <p>$10.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 13" data-price="8">
            <img src="images/13.jpg" alt="Product 13">
            <h2>Product 13</h2>
            <p>$8.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 14" data-price="12">
            <img src="images/14.jpg" alt="Product 14">
            <h2>Product 14</h2>
            <p>$12.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 15" data-price="15">
            <img src="images/15.jpg" alt="Product 15">
            <h2>Product 15</h2>
            <p>$15.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 16" data-price="15">
            <img src="images/16.jpg" alt="Product 16">
            <h2>Product 16</h2>
            <p>$15.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 17" data-price="15">
            <img src="images/17.jpg" alt="Product 17">
            <h2>Product 17</h2>
            <p>$15.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 18" data-price="10">
            <img src="images/18.jpg" alt="Product 18">
            <h2>Product 18</h2>
            <p>$10.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 19" data-price="8">
            <img src="images/19.jpg" alt="Product 19">
            <h2>Product 19</h2>
            <p>$8.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-name="Product 20" data-price="8">
            <img src="images/20.jpg" alt="Product 20">
            <h2>Product 20</h2>
            <p>$8.00</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
    </main>
    <footer>
        <p>&copy; 2024<br>Anika Khan<br>ID: 110103345</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
