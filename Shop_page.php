<?php
include 'includes/dbconnection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_SESSION['user']['customerid']; // Retrieve customer ID from session
    $item_name = $_POST['hidden-item-name'];
    $item_size = $_POST['item-size'];
    $item_amount = intval($_POST['item-amount']);
    $item_price = floatval($_POST['hidden-item-price']);
    $total_price = $item_amount * $item_price;
    $cus_name = $_POST['customer-name'];

    // Get item ID from the database based on the item name
    $stmt = $conn->prepare("SELECT itemid FROM items WHERE name = ?");
    $stmt->bind_param("s", $item_name);
    $stmt->execute();
    $stmt->bind_result($item_id);
    $stmt->fetch();
    $stmt->close();

    if ($item_id) {
        // Insert order into the orders table
        $stmt = $conn->prepare("INSERT INTO orders (customerid, itemid, name, amount, price, size) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iisiis", $customer_id, $item_id, $cus_name, $item_amount, $total_price, $item_size);
        
        if ($stmt->execute()) {
            echo "<script>
                alert('Order placed successfully!');
                window.location.href = 'Shop_page.php';
                </script>";
        } else {
            echo "<script>
                alert('Failed to place order: " . $stmt->error . "');
                window.location.href = 'Shop_page.php';
                </script>";
        }
        $stmt->close();
    } else {
        echo "<script>
            window.alert('Item not found in the database.');
            window.location.href = 'Shop_page.php';
            </script>";
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/style_shop.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap');
    </style>

    <title>ecOcean | Shop</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-container-1" id="left-section"><img id="img1" src="images/logo.png"></div>
            <div class="header-container-1" id="right-section">
                <div class="header-container-2" id="top-section">
                    <p>EC<b style="font-size: 27pt">O</b>CEAN</p>
                </div>
                <div class="header-container-2" id="bottom-section">
                    <div class="bottom-section-1" id="bs1">
                        <nav>
                            <a href="home.php">HOME</a>
                            <a href="Shop_page.php" class="active">SHOP</a>
                            <a href="about.php">ABOUT</a>
                            <a href="blog.php">BLOG</a>
                            <a href="logout.php">LOGOUT</a>
                        </nav>
                    </div>
                    <div class="bottom-section-2" id="bs2">
                        <a href="Account_personaldetails_page.php">
                            <img class="bi" src="images/profile.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="fashion-change">
            <div class="image-change" id="image-change">
                <div class="text-change">
                    <p id="text-overlay">New Arrivals in Fashion</p>
                </div>
            </div>
        </div>

        <!-- Category selection -->
        <div class="category-selection">
            <button onclick="showCategory('men')">Men</button>
            <button onclick="showCategory('women')">Women</button>
            <button onclick="showCategory('accessories')">Accessories</button>
        </div>

        <div id="item-display" class="item-display">
            <!-- Items will be dynamically inserted here -->
        </div>

        <!-- Order Modal -->
        <div id="order-modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div class="modal-div">
                    <div class="left-modal">
                        <img id="modal-item-img" src="" alt="">
                        <p id="modal-item-name"></p>
                        <p id="modal-item-price"></p>
                    </div>
                    <div class="right-modal">
                        <form method="post">
                            <label for="customer-name">Name:</label>
                            <input type="text" id="customer-name" name="customer-name" required><br><br>

                            <label for="item-size">Size:</label><br>
                            <div class="size-pick">
                                <div>
                                    <input type="radio" id="size-s" name="item-size" value="S" required>
                                    <label for="size-s">S</label>
                                </div>
                                <div>
                                    <input type="radio" id="size-m" name="item-size" value="M" required>
                                    <label for="size-m">M</label>
                                </div>
                                <div>
                                    <input type="radio" id="size-l" name="item-size" value="L" required>
                                    <label for="size-l">L</label>
                                </div>
                            </div>

                            <label for="item-amount">Amount:</label>
                            <input type="number" id="item-amount" name="item-amount" min="1" value="1" required oninput="calculatePrice()"><br><br>

                            <label for="total-price">Total Price:</label>
                            <input type="text" id="total-price" name="total-price" readonly><br><br>


                            <input type="hidden" name="hidden-item-name" id="hidden-item-name">
                            <input type="hidden" name="hidden-item-price" id="hidden-item-price">
                            
                            <button type="submit">Submit Order</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        

        
    </main>
    <script src="js/shop_script.js"></script>

    <footer>
        <div class="footer-container">
            <div class="footer-container-1">
                <div class="footer-section" id="fs1">
                    <ul>
                        <li><img id="img1" src="images/logo.png"></li>
                        <li>
                            <p>
                            Preserve our ocean, the lifeblood of our planet. Every creature within is precious. Join us in protecting this irreplaceable treasure for future generations.
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="footer-section" id="fs2"></div>
                
                <div class="footer-section" id="fs3">
                    <h3>NEED HELP</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="blog.php">Reviews</a></li>
                    </ul>
                </div>
                <div class="footer-section" id="fs4">
                    <div class="contact-1">
                        <h3>CONTACT INFO</h3>
                        <table cellspacing="10">
                            <tr>
                                <td ><span class="css-sprite-Pin"></span></td>
                                <td >123 Oceanview Drive, Seaview City,<br> Coastline, 98765</td>
                            </tr>
                            <tr>
                                <td><span class="css-sprite-Mail"></span></td>
                                <td>info@ecocean.com</td>
                            </tr>
                        </table>
                    </div>
                    <div class="contact-2" id="svg-social">
                        <div class="social-svg">
                            <a href="https://www.facebook.com/" title="facebook" target="_blank">
                                <span class="css-sprite-facebook"></span>
                            </a>
                        </div>
                        <div class="social-svg">
                            <a href="https://www.instagram.com/" title="instagram" target="_blank">
                                <span class="css-sprite-instagram"></span>
                            </a>
                        </div>
                        <div class="social-svg">
                            <a href="https://www.youtube.com/#!:" title="youtube" target="_blank">
                                <span class="css-sprite-youtube"></span>
                            </a>
                        </div>
                        <div class="social-svg">
                            <a href="https://web.whatsapp.com/" title="whatsapp" target="_blank">
                                <span class="css-sprite-whatsapp"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-container-2">
                <p>&copy; 2024 ecOcean 11600 Designed by the team Untitled</p>
            </div>
        </div>
    </footer>
    <script src="js/index.js"></script>
</body>
</html>