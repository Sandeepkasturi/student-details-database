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

// Get pin number to delete
$pin = $_POST["pin"];

// Delete data from database
$sql = "DELETE FROM students WHERE pin='$pin'";
if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Student deleted successfully!');</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();

// Redirect to index page
header("Location: index.html");
exit;
?>
