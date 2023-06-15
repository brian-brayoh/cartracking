<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="form-container">
        <div class="image">
            <img src="logo.jpg.jpg" alt="logo" width="50%">
        </div>
        <h2>Login</h2>
        <form action="server.php" method="POST">
            <label for="">Car Registration Number:</label>
            <input type="text" name="carRegNo" placeholder="Car Registration Number" required><br>
            <label for="">Password:</label>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login">Login</button><br>
        </form>
        Don't have an account? <a href="signup.php">Sign Up</a>

        <?php
        // Include server.php
        require 'server.php';

        // Handle login logic
        if (isset($_POST['login'])) {
            // Retrieve username and password from the form
            $carRegNo = $_POST['carRegNo'];
            $password = $_POST['password'];

            // Call the login function from server.php
            $loginResult = login($carRegNo, $password);

            // Check the result of the login function
            if ($loginResult === true) {
                // Redirect to the dashboard page
                header("Location: dashboard.php");
                exit();
            } else {
                // Display error message
                echo "Error: $loginResult";
            }
        }
        ?>


    </div>
</div>
</body>
</html>
