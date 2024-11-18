<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - AutoRental</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="container">
        <nav>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="dashboard container">
        <h2>Available Vehicles</h2>
        <!-- Pencarian dan filter -->
        <input type="text" id="search" placeholder="Search by vehicle name...">
        <select id="typeFilter">
            <option value="">All Types</option>
            <option value="lgcc">LGCC</option>
            <option value="suv">SUV</option>
            <option value="sedan">Sedan</option>
        </select>

        <div id="vehicleList"></div>
    </section>

    <script src="js/dashboard.js"></script>
</body>
</html>
