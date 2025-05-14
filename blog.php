<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Blog.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap');
    </style>

    <title>ecOcean | Blog</title>
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
                            <a href="blog.php" class="active">BLOG</a>
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
        <div class="video-background">
            <video autoplay muted loop id="Vvideo">
                <source src="videos/sea.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="overlay"></div>

        <div class="blog-main">
            <div class="box1">

                <h1 class="announcement"><b>New Fashion Arrivals!!!</b></h1><br>

                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="images/tshirt2.jpg" alt="T-shirt 2" class="slide-image">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="images/tshirt3.jpg" alt="T-shirt 3" class="slide-image">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="images/tshirt5.jpg" alt="T-shirt 5" class="slide-image">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="images/tshirt4.jpg" alt="T-shirt 4" class="slide-image">
                        <div class="text"></div>
                    </div>
                </div>

                <div class="dots-container">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

                <script>
                    let slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) { slideIndex = 1 }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 3000); // Change image every 3 seconds
                    }
                </script>

                <p class="description">
                    <b>Explore our new sea-themed fashion arrivals, featuring dresses with seashell prints, accessories inspired by ocean hues, and jewelry that sparkles like the sea. Each piece adds a touch of oceanic beauty to your wardrobe. Plus, a portion of every purchase supports ocean conservation. Shop now to elevate your style and help protect our oceans!</b>
                </p>
                <a href="Shop_page.php" class="shop-now-btn">Shop Now</a>
            </div>

            <div class="box1 comment-section">
                <h1 class="comments-title"><b>Check Out What People Are Saying!</b></h1><br>
                <img src="images/Blog/prof1.png">
                <p class="comment">"Eco Ocean Organization is doing amazing work for our oceans. I also love their sea-themed shirts and accessories—they’re perfect for showing support!"<br><b>-Jessica T-</b></p><br><br>
                <img src="images/Blog/prof2.png">
                <p class="comment">"I’m really impressed with the efforts of Eco Ocean Organization. Their sea-themed merchandise is fantastic, and it’s great to support such a worthy cause."<br><b>-Mark R-</b></p><br><br>
                <img src="images/Blog/prof3.png">
                <p class="comment">"The work Eco Ocean Organization is doing is truly inspiring. The sea-themed shirts and accessories are a great way to contribute while looking good!"<br><b>-Laura M-</b></p>
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