<?php

include 'includes/dbconnection.php';
session_start();

$user = $_SESSION['user'];
$cusid = $user['customerid'];

$stmt = $conn->prepare("SELECT * FROM orders WHERE customerid = ?");
$stmt->bind_param("i",$cusid);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/account.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap');
        h1{
		    font-family: 'Bodoni Moda SC:', variable;   
		    line-height:120pt;
	    }

        .Orders h1 {
            text-align: center;
            padding-left: 30%;
        }

        .Orders table{		 
            margin-top:0px;
            margin-left:50px;
            width:120%;
            height:50%;
            padding:20px;
            border:1px solid black;
            border-collapse: collapse;
        }

        .Orders th,.Orders td {
            text-align:center;
            border:1px solid black;
            border-collapse: collapse;
            font-family: 'Bodoni Moda SC:', variable;
        }

        input[type=button] {  
            width: 80px;     
            background-color: #005F73;
            color:white;
            cursor: pointer;
            border-radius: 15px;
            padding: 3px 10px 3px 10px;
        }

        input[type=button].btn1 {
            background-color: green;
            border-top-right-radius: 100px; 
            border-bottom-right-radius: 100px; 
        
        }

        input[type=button].btn2{
            background-color: blue;
            border-top-right-radius: 100px; 
            border-bottom-right-radius: 100px; 
        
        }

        input[type=button].btn3{
            background-color: red;
            border-top-right-radius: 100px; 
            border-bottom-right-radius: 100px; 
        
        }

        input[type=button].view:hover {      
            background-color: #94d2bd;
            border-radius: 15px;
        }

        .popup {
            display: none;
            position: fixed; 
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0, 0, 0, 0.5);  
        }
       
        .popup-content {
            background-color: white;
            margin: 20px auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 100%; 
            max-width: 30%; 
            border-radius: 15px; 
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }
	
        .item{
			border-radius: 0px;			 			
		}

	    .desc {		
			font-size: 14px;
			font-family: 'Bodoni Moda SC:', variable;
		}

		.popup-content h2 {
            font-size: 20px;
			font-family: 'Bodoni Moda SC:', variable;
        }
    </style>

    <title>ecOcean | Account</title>
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
                            <a href="Shop_page.php">SHOP</a>
                            <a href="about.php">ABOUT</a>
                            <a href="blog.php">BLOG</a>
                            <a href="logout.php">LOGOUT</a>
                        </nav>
                    </div>
                    <div class="bottom-section-2" id="bs2">
                        <a href="#" class="active">
                            <img class="bi" src="images/profile.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main><!-- WRITE YOUR CODE HERE -->
        <div class="content">
            <div class="sidebar">
                <div class="title">
                <h2><img src="images/girl.jpg"  height="20%" width="25%"> My Account</img></h2>
                <br><br><hr style="color:green">	 
                </div>
                <div class= "navigation">
                    <ul>					 
                        <li>
                            <a href="Account_personaldetails_page.php">
                                <span class="material-icons-outlined">person_search</span>
                                <span >Personal Info</span>
                            </a>			   
                        </li>
                        <li>
                            <a href="Account_payment_page.php" >  <span class="material-icons-outlined">payments</span>
                            <span>Payments</span>
                            </a>
                        </li>
                        <li>
                            <a href="Account_orderhistory_page.php" class="active"> <span class="material-icons-outlined">shopping_bag</span>
                            <span>Order History</span>
                            </a>				     
                        </li>
                        <li>
                            <a href="Account_policies_page.php"> <span class="material-icons-outlined">policy</span>
                            <span>Policies<span>
                            </a>			     
                        </li>
                        <li class="logout">
                            <a href="logout.php"> <span class="material-icons-outlined">logout</span>
                            <span>Log Out</span>
                            </a>
                        </li>			     
                    </ul>	    
                </div>
            </div>
            <div class="Orders" >
                <h1>Order History</h1>
                <table class = "ord">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Item ID</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Size</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row['orderid']."</td>";
                                echo "<td>".$row['itemid']."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['amount']."</td>";
                                echo "<td>".$row['size']."</td>";
                                echo "<td>".$row['price']."</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan = '6'>No orders found. Your simple contribution save the ocean.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>				 
            </div>	
            <div id="popupBox" class="popup">
                <div class="popup-content">
                    <span class="close">&times;</span>
                    <h2>Product Description</h2>
                    <p id="orderDetails"><img class="item" src="tshirt.jpeg"  height="20%" width="25%"></p>
                    <span class="desc">Ladies T-shirt 01<br>Upgrade your casual wardrobe with our Classic Fit Men's T-Shirt, the perfect blend of 
                        comfort and style. Made from 100% premium cotton, this t-shirt offers a soft, breathable feel that keeps you cool 
                        and comfortable all day long.
                    </span>
                </div>
            </div>		 
        </div>	
    </main>

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
	<script>
        // Get the popup element
        var popup = document.getElementById("popupBox");

        // Get the <span> element that closes the popup
        var span = document.getElementsByClassName("close")[0];

        // Get all the "View" buttons
        var viewButtons = document.querySelectorAll('.view');

        // Loop through the buttons and attach the click event
        viewButtons.forEach(function(button, index) {
            button.addEventListener('click', function() {
                // Display the popup
                popup.style.display = "block";
                
                // Optionally: Customize the popup content based on the order clicked
               

                var orderDetails = `
                    <strong>Order ID:</strong> ${orderId}<br>
                    <strong>Total Amount:</strong> ${orderAmount}<br>
                    <strong>Shipping Address:</strong> ${shippingAddress}<br>
                    <strong>Date:</strong> ${orderDate}
                `;

                document.getElementById('orderDetails').innerHTML = orderDetails;
            });
        });

        // When the user clicks on <span> (x), close the popup
        span.onclick = function() {
            popup.style.display = "none";
        }

        // When the user clicks anywhere outside of the popup, close it
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
    </script>
	
</body>
</html>