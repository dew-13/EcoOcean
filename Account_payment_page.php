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
		
		.payment{
	        box-sizing: border-box;
			width:60%;
            background-color: white; /* Optional: Different background for the form */
            padding: 70px;
	        margin:80px;
            box-sizing: border-box;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Optional: Add a subtle shadow for better separation */
			justify-content: center; /* Centers horizontally */
	    }

        .payment h1 {
            text-align: center;
        }

        h1{
			line-height:200%;	
		}	

		.payment form {
			font-family: 'Libre Baskerville', static;			             			 
        }

	    input[type=text]  {   
            width:60%;
            padding: 12px 20px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 15px;
		    margin: 20px 0;
			font-family: 'Libre Baskerville', static;			
        }

		input[type=radio]  {   
            padding: 10px 10px;          
		    margin:20px;
		    width:5%;
        }

		.select select {
            width:20%;
		    padding: 12px 20px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 15px;
		    margin: 20px 0;
			font-family: 'Libre Baskerville', static;	
        }				 
     	 
		input[type=button].update {  
		    width:50%;
            padding:10px;	
            border: 1px solid black;
            border-radius: 4px;
            font-size: 15px;
		    margin-left: 30%;
			margin-bottom: 0;			
			cursor: pointer;
			border-radius: 15px;
            background-color: #005F73;
        }

		input[type=button].update:hover {      
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
                            <a href="home.php" >HOME</a>
                            <a href="Shop_page.php">SHOP</a>
                            <a href="about.php">ABOUT</a>
                            <a href="blog.php">BLOG</a>
                            <a href="logout.php">LOGOUT</a>
                        </nav>
                    </div>
                    <div class="bottom-section-2" id="bs2">
                        <a href="#" class="active" >
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
                        <a href="Account_payment_page.php" class="active">  <span class="material-icons-outlined">payments</span>
                        <span>Payments</span>
                        </a> 
                    </li>
                    <li>
                        <a href="Account_orderhistory_page.php"> <span class="material-icons-outlined">shopping_bag</span>
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
            <div class="payment">
                <h1 style="font-family:Abril Fatface">Payment Details</h1><br>
                <div class="method">
                    <input type="radio" name="method" Value="Credit Card"><span class="material-icons-outlined">credit_card</span>
                    <input type="radio" name="method" Value="Pay Pal"> <span class="material-icons-outlined">payments</span>
                </div>
                <br>
                <form>			 
                    <label>Cardholder Name</label><br>
                    <input type="text" name="cardholder" placeholder="Enter the Cardholder Name"><br>
                        
                    <label>Card Number</label><br>
                    <input type="text"  name="cardnumber" placeholder="Enter the card number">
                </form>
                <div class="select">
                    <select id="month" name="month">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                    </select>
                    
                    <select id="date" name="date">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select> 
                    <input type="text"  name="CVV" placeholder="CVV">
                </div >
                <br>
                <input class="update" type="button" value="Update" onclick="alert('Your details Has been updated')">
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
</body>
</html>