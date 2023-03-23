<?php

if (isset($_POST['submit'])) {
    // code to execute when the form is submitted
}

// Database configuration
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and display error message if connection failed
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Construct the SQL query to retrieve cars data from the database
$sql = "SELECT * FROM cars WHERE 1=1";

// Add filters to the SQL query based on the user input from the search form
if (!empty($_POST['make'])) {
	$make = $_POST['make'];
	$sql .= " AND make='$make'";
}

if (!empty($_POST['model'])) {
	$model = $_POST['model'];
	$sql .= " AND model='$model'";
}

if (!empty($_POST['mileage'])) {
	$mileage = $_POST['mileage'];
	switch ($mileage) {
		case '1':
			$sql .= " AND mileage BETWEEN 0 AND 10000";
			break;
		case '2':
			$sql .= " AND mileage BETWEEN 10000 AND 25000";
			break;
		case '3':
			$sql .= " AND mileage BETWEEN 25000 AND 50000";
			break;
		case '4':
			$sql .= " AND mileage BETWEEN 50000 AND 75000";
			break;
		case '5':
			$sql .= " AND mileage BETWEEN 75000 AND 100000";
			break;
	}
}

if (!empty($_POST['price_min']) && !empty($_POST['price_max'])) {
	$price_min = $_POST['price_min'];
	$price_max = $_POST['price_max'];
	$sql .= " AND price BETWEEN $price_min AND $price_max";
}

if (!empty($_POST['gearbox'])) {
	$gearbox = $_POST['gearbox'];
	$sql .= " AND gearbox='$gearbox'";
}

// Execute the SQL query and retrieve results
$result = $conn->query($sql);

// Display the cars data in HTML format
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo '<div class="car">';
		echo '<h2>' . $row['make'] . ' ' . $row['model'] . '</h2>';
		echo '<p>Mileage: ' . $row['mileage'] . ' miles</p>';
		echo '<p>Price: £' . $row['price'] . '</p>';
		echo '<p>Gearbox: ' . $row['gearbox'] . '</p>';
		echo '</div>';
	}
} else {
	echo '<p>No cars found</p>';
}

// Close the database connection
$conn->close();
?>
