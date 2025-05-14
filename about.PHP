<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-aboutUs.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap');
    </style>

    <title>ecOcean | About Us</title>
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
                            <a href="about.php" class="active">ABOUT</a>
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

    <div class="space"></div>

    <main>
        <video autoplay muted loop id="background-video">
            <source src="videos/bgvideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
       
    
        <h1>ABOUT US</h1> <br>

        <div class="first">
            <div class="image-gallery">
                <img src="images/one.jpg" alt="T-Shirt">
                <img src="images/two.jpg" alt="Shorts">
                <img src="images/three.jpg" alt="Jacket">
                <img src="images/four.jpg" alt="Kids Wear">
                <img src="images/five.jpg" alt="Accessories">
            </div>
            <div class="transparentbox">
                <P>Echo Ocean is your ultimate destination for sea-inspired fashion! Discover trendy t-shirts, shorts,
                    shoes, and accessories that celebrate the ocean’s beauty. We offer stylish collections for ladies, gents, and kids,
                    blending current trends with a passion for marine life. Every purchase 
                    supports ocean conservation efforts, helping to protect marine animals and ecosystems. 
                    Refresh your wardrobe with us and make a difference, one outfit at a time!
            </div>
        </div>
    
        <div class="space"></div>

        <div class="sea">
            <div class="sea-para">
                <p>
                    Eco-Ocean Guardians, we are dedicated to protecting and preserving our planet’s most precious resource: the ocean. Our mission is to safeguard marine ecosystems, combat pollution, and ensure the health of our oceans for future generations. 
                    We believe in turning passion into action. That’s why we sell a range of eco-friendly products, with 100% of the profits directly funding vital ocean protection projects. From establishing marine protected areas to restoring coral reefs, every purchase you make contributes to the fight against ocean pollution, the conservation of endangered marine species, and the promotion of sustainable practices worldwide.
                    Join us on our journey to protect the oceans, one purchase at a time. Together, we can make a wave of change.
                </p>
            </div>
            <div class="sea-pic">
                <img src="images/turtle.webp" alt="Sea Turtle">
            </div>
        </div>

        <div class="slogun">
            <h3>"Make waves in ocean conservation with every purchase."</h3>
        </div>
        

        <center>
            <button class="button" onclick="window.location.href='Shop_page.php';">Join Us</button>
        </center>
    </main>

    <div class="space"></div>

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
