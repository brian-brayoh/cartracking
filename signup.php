<!-- signup.php -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="form-container">
        <div class="image">
            <img src="logo.jpg.jpg" alt="Logo" width="50%">
        </div>
        <h2>Sign Up</h2>
        <form action="server.php" method="POST">
            <label for="">Car Registration Number:</label>
            <input type="text" name="carRegNo" placeholder="Car Registration Number" required><br>
            <label for="">Password:</label>
            <input type="password" name="password" placeholder="Password" required><br>
            <label for="">Email:</label>
            <input type="email" name="email" placeholder="Email" required><br>
            <button type="submit" name="signup">Sign Up</button><br>
        </form>
        Already have an account? <a href="login.php">Login</a>
        <?php
        // Include server.php
        require 'server.php';

        // Handle signup logic
        if (isset($_POST['signup'])) {
            // Retrieve signup form data
            $carRegNo = $_POST['carRegNo'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Call the signup function from server.php
            signup($carRegNo, $password, $email);
        }
        ?>


    </div>
</div>
</body>
</html>
