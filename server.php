<?
// Database configuration
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cartracking';

// Establish database connection
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Signup form submission
if (isset($_POST['signup'])) {
    $carRegNo = $_POST['carRegNo'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Perform necessary validation and sanitization

    // Insert user data into the database
    $query = "INSERT INTO login (car_registration_number, password, email) VALUES ('$carRegNo', '$password', '$email')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Registration successful
        echo "Registration successful!";
        // Redirect to a new page or perform further actions
    } else {
        // Registration failed
        echo "Error: " . mysqli_error($connection);
    }
}

// Login form submission
if (isset($_POST['login'])) {
    $carRegNo = $_POST['carRegNo'];
    $password = $_POST['password'];

    // Perform necessary validation and sanitization

    // Retrieve the password from the database
    $query = "SELECT password FROM login WHERE car_registration_number = '$carRegNo' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        echo "Login successful!";
        header("Location: dashboard.php"); // Redirect to the dashboard page
        exit();
        // Redirect to a new page or perform further actions
    } else {
        // Invalid car registration number or password
        echo "Invalid car registration number or password.";
    }
}

// Add Car Details
if (isset($_POST['make']) && isset($_POST['model']) && isset($_POST['year']) && isset($_POST['color'])) {
    session_start(); // Start the session
    $carregnumber = $_SESSION['carregnumber']; // Assuming you store car registration number in the session
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];

    $query = "INSERT INTO cardetails (car_registration_number, make, model, year, color) VALUES ('$carregnumber', '$make', '$model', '$year', '$color')";
    $result = mysqli_query($connection, $query);

  
}

// Add Personal Details
if (isset($_POST['fullname']) && isset($_POST['address']) && isset($_POST['phone'])) {
    session_start(); // Start the session
    $carregnumber = $_SESSION['carregnumber']; // Assuming you store car registration number in the session
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO personaldetails (car_registration_number, fullname, address, phonenumber) VALUES ('$carregnumber', '$fullname', '$address', '$phone')";
    $result = mysqli_query($connection, $query);


}

// Close the database connection
mysqli_close($connection);
