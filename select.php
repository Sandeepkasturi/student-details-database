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

// Select data from database
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row["pin"] . "</td>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["section"] . "</td>";
		echo "<td>" . $row["branch"] . "</td>";
		echo "</tr>";
	}
} else {
	echo "<tr><td colspan='4'>No students found.</td></tr>";
}

// Close database connection
$conn->close();
?>
