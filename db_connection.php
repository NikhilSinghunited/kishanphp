<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "game2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the "game2" table
$sql = "SELECT date, days, `prize_1`, `prize_2`, `prize_3` FROM game2";
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Fetch data and encode as JSON
    $data = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode(['data' => $data]); // Wrap data in an associative array
} else {
    // If no data, return an empty JSON array
    echo json_encode(['data' => []]); // Wrap an empty array
}

// Close connection
$conn->close();
?>
