<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Include your CSS stylesheets -->
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-+YiOtZvUmj9RanSc9BOhLh6WYENj7EMH7C4S2/ie4q+UY7HzU4HzjHun0L8VpgLWOb1NkzYYuYRfMT77gMmkmQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Define your additional CSS styles here */
        body {
            background-color: lightblue;
        }
        .dashboard-button i {
            margin-right: 5px;
        }
        .dashboard-button a {
            color: #333;
            text-decoration: none;
        }
        .dashboard-sections {
            display: none;
        }
        .dashboard-sections.show {
            display: block;
        }
        .dashboard-sections h2 {
            margin-top: 0;
        }
        .dashboard-sections.show #home,
        .dashboard-sections.show #cardetails,
        .dashboard-sections.show #personal_details,
        .dashboard-sections.show #assignedarea {
            display: block;
        }
    </style>

    <script>
        // JavaScript function to toggle the display of dashboard sections
        function toggleDashboardSections() {
            var sections = document.getElementById("dashboard-sections");
            sections.classList.toggle("show");
        }

        // JavaScript function to navigate to the specified section
        function navigateToSection(sectionId) {
            var sections = document.getElementById("dashboard-sections");
            sections.classList.remove("show");

            var targetSection = document.getElementById(sectionId);
            targetSection.scrollIntoView();
        }

        // JavaScript function to show the dashboard sections on page load
        function showDashboardSections() {
            var sections = document.getElementById("dashboard-sections");
            sections.classList.add("show");
        }
    </script>
</head>
<body onload="showDashboardSections()">
    <div class="container">
        <div class="sidebar">
            <!-- Sidebar content -->
            <!-- Add links and navigation for the dashboard sections -->
            <ul>
                <li class="dashboard-button"><a href="#" onclick="toggleDashboardSections()"><i class="fas fa-th"></i> Dashboard</a></li>
                <!-- Add more navigation items if needed -->
                <li><a href="javascript:void(0);" onclick="navigateToSection('home')"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="javascript:void(0);" onclick="navigateToSection('cardetails')"><i class="fas fa-car"></i> Car Details</a></li>
                <li><a href="javascript:void(0);" onclick="navigateToSection('personal_details')"><i class="fas fa-map-marker-alt"></i> Personal Details</a></li>
                <li><a href="javascript:void(0);" onclick="navigateToSection('assignedarea')"><i class="fas fa-map-marker-alt"></i> Assigned Area</a></li>
            </ul>
        </div>
        <div class="content">
            <!-- Content for the selected section will be displayed here -->
            <section id="dashboard-sections" class="dashboard-sections">
                <section id="home">
                    <h2>Welcome to the Home Page</h2>
                    <!-- Add your home page content here -->
                </section>
                <section id="cardetails">
                    <h2>Car Details</h2>
                    <!-- Add your car details content here -->
                    <div class="container">
                        <div class="form-container">
                            <form class="" action="server.php" method="post">
                                <label>Car Registration Number:</label>
                                <input type="text" name="carRegNo">
                                <label for="">Make:</label>
                                <input type="text" name="make" value="">
                                <label for="">Model:</label>
                                <input type="text" name="model" value="">
                                <label for="">Year:</label>
                                <input type="text" name="Year" value="">
                                <label for="">Color:</label><br>
                                <input type="text" name="colour" value="">
                                <input type="submit" name="submitdetails" value="Save">
                            </form>
                        </div>
                    </div>
                </section>
                <section id="personal_details">
                    <h2>Personal Details</h2>
                    <!-- Add your personal details content here -->
                    <div class="container">
                        <div class="form-container">
                            <form class="" action="server.php" method="post">
                                <label for="">Car Registration Number:</label>
                                <input type="text" name="car_registration_number" value="">
                                <label for="">Full Name:</label>
                                <input type="text" name="fullname" value="">
                                <label for="">Address:</label>
                                <input type="text" name="address" value="">
                                <label for="">Phone:</label>
                                <input type="text" name="phone" value="">
                                <input type="submit" name="save" value="Save">
                            </form>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>

    <!-- Include your JavaScript files if needed -->
    <script src="script.js"></script>
</body>
</html>
