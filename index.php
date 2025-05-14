<?php

include 'includes/dbconnection.php';

$message = '';

// Sign In Logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'], $_POST['password'])) {
    $usernameOrEmail = $_POST['username'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM customer WHERE (username = ? OR email = ?) AND password = ?");
    $stmt->bind_param("sss", $usernameOrEmail, $usernameOrEmail, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['user'] = $result->fetch_assoc(); // Store user details in session
        header("Location: home.php");
        exit();
    } else {
        // No user
        $message = "Invalid username/email or password.";
    }

    $stmt->close();
}

// Sign Up Logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fullname'], $_POST['email'], $_POST['new_password'], $_POST['confirm_password'])) {
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    // Check if username or email already exists
    $stmt = $conn->prepare("SELECT * FROM customer WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username or email already exists.";
    } else {
        // Insert the new user
        $stmt = $conn->prepare("INSERT INTO customer (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {

            //Fetch newly created details
            $stmt = $conn->prepare("SELECT * FROM customer WHERE username = ? AND email = ?");
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                session_start(); // Start a session
                $_SESSION['user'] = $result->fetch_assoc(); // Store user details in session
                
                echo "<script>
                    alert('Account Created successfully!');
                    window.location.href = 'home.php';
                    </script>";
            } else {
                echo "Error fetching user details.";
            }

        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecOcean</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/LOGIN.css">
    <script>
        function showForm(formName) {
            const signInForm = document.getElementById('sign-in-form');
            const signUpForm = document.getElementById('sign-up-form');
            const signInTab = document.getElementById('sign-in-tab');
            const signUpTab = document.getElementById('sign-up-tab');
            
            if (formName === 'sign-in') {
                signInForm.style.display = 'block';
                signUpForm.style.display = 'none';
                signInTab.classList.add('active');
                signUpTab.classList.remove('active');
            } else {
                signInForm.style.display = 'none';
                signUpForm.style.display = 'block';
                signInTab.classList.remove('active');
                signUpTab.classList.add('active');
            }
        }
    </script>
</head>
<body onload="showForm('sign-in')">
    <!-- Video Background -->
    <video autoplay muted loop id="bg-video">
        <source src="videos/bgvideo1.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    
    <div class="overlay"></div>

    <div class="container">
        <div class="login-box">
            <div class="logo">Login</div>
            <hr><br><br>
            <div class="tabs">
                <button id="sign-in-tab" class="tab active" onclick="showForm('sign-in')">Sign in</button>
                <button id="sign-up-tab" class="tab" onclick="showForm('sign-up')">Sign up</button>
            </div>

            <!-- Sign In Form -->
            <form id="sign-in-form" action="index.php" method="post">
                <div class="input-group">
                    <input type="text" id="username" name="username" placeholder="User name or Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Sign in</button>
            </form>

            <!-- Sign Up Form -->
            <form id="sign-up-form" action="index.php" method="post" style="display: none;">
                <div class="input-group">
                    <input type="text" id="fullname" name="fullname" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="new-password" name="new_password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn">Sign up</button>
            </form>

            <div style="margin-top: 20px; padding: 10px; color: #ee9b00;">
                <?php
                    if (isset($message)) echo $message;
                ?>
            </div>
        </div>
    </div>
</body>
</html>
