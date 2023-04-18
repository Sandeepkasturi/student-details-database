<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdetails";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Get form data
$pin = $_POST["pin"];
$name = $_POST["name"];
$section = $_POST["section"];
$branch = $_POST["branch"];

// Insert data into database
$sql = "INSERT INTO students (pin, name, section, branch) VALUES ('$pin', '$name', '$section', '$branch')";
if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Student added successfully!');</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();

// Redirect to index page
header("Location: index.html");
exit;
?>
