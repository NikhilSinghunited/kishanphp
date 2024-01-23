<?php
// Connection parameters
$servername = "localhost"; // Use "localhost" if your MySQL server is on the same machine
$username = "root";
$password = "";
$dbname = "game2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming your HTML form has input fields with the names "date1", "date2", "date3", "date4", "date5"
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$date3 = $_POST['date3'];
$date4 = $_POST['date4'];
$date5 = $_POST['date5'];

// Using prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO game2 (date, days, Prize_1, Prize_2, Prize_3) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $date1, $date2, $date3, $date4, $date5);

// Check if the statement executed successfully
if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    // Display a more detailed error message
    echo "Error: " . $stmt->error;

    // Log the error to a file or error tracking system
    // error_log("Error: " . $stmt->error, 0);
}

// Close the statement
$stmt->close();

// Close the connection
$conn->close();
?>
