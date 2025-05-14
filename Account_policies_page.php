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
	  	.refund{
            background-color: white; /* Optional: Different background for the form */
            padding: 10px;
	        margin-top:50px;
            box-sizing: border-box;
            width:70%;			      
	 	}

	  	.refund h1{
		 	color:black;
		 	font-family: "Times New Roman", Times, serif;	 
			text-align: center;
	 	}

	 	.refund h2{
		 	color:red;
		 	font-family: 'Bodoni Moda SC:', variable;
			font-variant: small-caps;
	 	}

	 	.refund p{
		 	text-align:justify;
		  	font-family: "Times New Roman", serif;
		  	font-style: italic;		  
		 	font-size:15pt;
		  	line-height:4vh;
	 	}

	  	.refund h3{
		 	text-align:justify;
	     	line-height:8vh;
		 	font-family: 'Georgia', serif;
	 	}

	 	.return{
         	background-color:white;
	      	padding:30px;
		 	border:2px solid black;
		 	margin:20px;
		   	border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Optional: Add a subtle shadow for better separation */
	 	}
	 
	 	.shipping{
	     	background-color:white;
	     	padding:30px;
		 	border:2px solid black;
		 	margin:20px;
		    border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Optional: Add a subtle shadow for better separation */
	 	}

	 	.payment{
	     	background-color:white;
	     	padding:30px;
		 	border:2px solid black;
		  	margin:20px;
		    border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Optional: Add a subtle shadow for better separation */
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
						<a href="Account_orderhistory_page.php"> <span class="material-icons-outlined">shopping_bag</span>
						<span>Order History</span>
						</a>				     
					</li>
					<li>
						<a href="Account_policies_page.php" class="active"> <span class="material-icons-outlined">policy</span>
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
			<div class="refund">
				<h1>Terms and Conditions</h1>
				<div class="return">	
					<h2>Refund and Return Policies</h2>

					<h3>Eligibility</h3> 
					<p>You may return items 
					within 30 days of purchase for a full refund, provided the items are in 
					their original condition with tags attached. Sale items are not eligible for returns or exchanges.</p>
					
					<h3>Time Frame</h3> 
					<p>Refunds will be processed within 7-10 business days after we receive your returned item. You will 
					receive a confirmation email once your refund has been issued.</p>
				
					<h3>Return Shipping</h3> 
					<p>Customers are responsible for return shipping costs. We recommend using a trackable shipping service or 
					purchasing shipping insurance for items of high value.</p>
					
					<h3>Non-Returnable Items</h3> 
					<p>The following items are non-returnable: gift cards, perishable goods, and personal care items.</p>
				</div>
				<div class="shipping">	
					<h2>Shipping Policy</h2>

					<h3>Shipping Rates</h3> 
					<p>We offer standard and expedited shipping options. Shipping costs are calculated at checkout based on your location and the weight of your order.</p>
					
					<h3>Shipping Time</h3> 
					<p>Orders are processed within 1-2 business days. Standard shipping typically takes 5-7 business days, while expedited shipping takes 2-3 business days.</p>
					
					<h3>International Shipping</h3> 
					<p>We ship internationally to select countries. International customers are responsible for any customs fees, duties, or taxes.</p>
					
					<h3>Tracking Orders</h3> 
					<p>Once your order is shipped, you will receive a tracking number via email. You can use this number to track your shipment on our website.</p>
				</div>	
				<div class="payment">	
					<h2>Payment Policy</h2>

					<h3>Accepted Payment Methods</h3> 
					<p>We accept Visa, MasterCard, American Express, PayPal, and other major credit cards. Payments are processed securely through our payment gateway.</p>
					
					<h3>Payment Security</h3> 
					<p>Your payment information is encrypted and transmitted securely using SSL technology. We do not store your credit card information.</p>
					
					<h3>Payment Disputes</h3> 
					<p>If you encounter any issues with your payment, please contact our customer service team within 30 days of the transaction. 
					We will work to resolve the issue promptly.</p>
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
	
</body>
</html>