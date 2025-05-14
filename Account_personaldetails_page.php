<?php

include 'includes/dbconnection.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$user = $_SESSION['user'];
// $email = $user['email'];
$cusid = $user['customerid'];

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    //Convert all inputs to html format so that it won't affect structure and able to store special characters like #,$,<
    $firstname = htmlspecialchars($firstname);
    $lastname = htmlspecialchars($lastname);
    $contact = htmlspecialchars($contact);
    $address = htmlspecialchars($address);
    $password = htmlspecialchars($password);

    $stmt = $conn->prepare("UPDATE customer SET firstname = ?, lastname = ?, email = ?, contact = ?, address = ?, password = ? WHERE customerid = ?");
    $stmt->bind_param("ssssssi", $firstname, $lastname, $email, $contact, $address, $password, $cusid);

    
    if ($stmt->execute()) {

        //Update the session and its values after inserting
        $_SESSION['user']['firstname'] = $firstname;
        $_SESSION['user']['lastname'] = $lastname;
        $_SESSION['user']['email'] = $email;
        $_SESSION['user']['contact'] = $contact;
        $_SESSION['user']['address'] = $address;
        $_SESSION['user']['password'] = $password;

        echo "<script>
                alert('Profile updated successfully!');
                window.location.href = 'Account_personaldetails_page.php';
                </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
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
		.details{
			width:60%;
            background-color: white; /* Optional: Different background for the form */
            padding: 20px;
	        margin:50px;
            box-sizing: border-box;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Optional: Add a subtle shadow for better separation */
			justify-content: center; /* Centers horizontally */
		}
	   
		.details form {
            display: flex;
            flex-direction: column;
			font-family: 'Libre Baskerville', static;			
        }

		.details form img{
			border-radius:50%;
			height:20%;
			width:20%;
			text-align:center;
			margin-left: auto;
            margin-right: auto;
			margin-bottom: 20px; 
			max-width: 100%;  
		}

		.details button {
			width:30%;
			background-color: white; 
            border: 1px solid black;
            color: black;
            padding: 5px 0px;
            text-align: center;        
            font-size: 15px;
            margin-left: auto;
			margin-right: auto;
            cursor: pointer;
		}
		 
		input[type=text], input[type=submit] {
            width:90%;
            padding: 12px 20px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 15px;
		    margin: 20px 0;
			font-family: 'Libre Baskerville', static;			
        }

		.password-container {
            width:50%;
            position: relative;
        }
	   
		.password-container input {
            width:50%;
            padding: 12px 20px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 15px;
        }

        input[type=button], input[type=submit] {
            width: 40%;
            background-color: #005F73;
            color: white;
            padding: 15px 20px;
            cursor: pointer;
			margin-left: auto;
            margin-right: auto;
			margin-bottom:20px;
			border-radius: 15px;
        }
		 
	    .toggle-password {	
            position:absolute;	  
            right: 168px;
            top: 58%;
		    cursor: pointer;		           
        }

        input[type=button], input[type=submit]:hover {      
            background-color: #94d2bd;
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
                        <a href="#">
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
                <div class="navigation">
                    <ul>					 
                    <li>
                        <a href="Account_personaldetails_page.php" class="active">
                            <span class="material-icons-outlined">person_search</span>
                            <span>Personal Info</span>
                        </a>			   
                    </li>
                    <li>
                        <a href="Account_payment_page.php"><span class="material-icons-outlined">payments</span>
                        <span>Payments</span>
                        </a>
                    </li>
                    <li>
                        <a href="Account_orderhistory_page.php"><span class="material-icons-outlined">shopping_bag</span>
                        <span>Order History</span>
                        </a>				     
                    </li>
                    <li>
                        <a href="Account_policies_page.php"><span class="material-icons-outlined">policy</span>
                        <span>Policies<span>
                        </a>			     
                    </li>
                    <li class="logout">
                        <a href="logout.php"><span class="material-icons-outlined">logout</span>
                        <span>Log Out</span>
                        </a>
                    </li>			     
                    </ul>	    
                </div>
            </div>
            <div class="details">
                <form method="post">

                    <div class="welcome">
                        <p class="greeting">Welcome,</p>
                        <p class="names"><?php echo $user['username']?></p>
                    </div>

                    <!-- <img src="images/edit.jpg"></img>
                    <button class="button">Change Profile Picture</button> -->
                    <label>First Name</label>
                    <input type="text" name="firstname" placeholder="Your First name.." value="<?php echo isset($user['firstname']) ? htmlspecialchars($user['firstname']) : ''; ?>" required>

                    <label>Last Name</label>
                    <input type="text"  name="lastname" placeholder="Your Last name.." value="<?php echo isset($user['lastname']) ? htmlspecialchars($user['lastname']) : ''; ?>" required>
                        
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Your Email Address" value="<?php echo isset($user['email']) ? htmlspecialchars($user['email']) : ''; ?>" required>
                        
                    <label>Contact Number</label>
                    <input type="text" name="contact" placeholder="Enter Your Mobile Number" value="<?php echo isset($user['contact']) ? htmlspecialchars($user['contact']) : ''; ?>" required>
                        
                    <label>Shipping Address</label>
                    <input type="text" name="address" placeholder="Shipping Address" value="<?php echo isset($user['address']) ? htmlspecialchars($user['address']) : ''; ?>" required>

                    <div class="password-container">
                        <label>Password</label><br><br>
                        <input type="password" id="password" name="password" placeholder="Enter New Password" required>
                        <span class="toggle-password" onclick="togglePassword()"> 
                            <i class="material-icons-outlined" id="password-icon">visibility</i>
                        </span>
                    </div>
                        <br><br>
                    <input type="submit" value="UPDATE">
                </form>
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
	
	 function togglePassword() {
        var passwordField = document.getElementById("password");
        var passwordIcon = document.getElementById("password-icon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordIcon.textContent = "visibility_off"; // Change to hide icon
        } else {
            passwordField.type = "password";
            passwordIcon.textContent = "visibility"; // Change to show icon
        }
    }
	</script>
</body>
</html>