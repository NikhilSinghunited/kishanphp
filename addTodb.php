<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the POST request from JavaScript
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if ($data['action'] === 'insertToDatabase') {
        // Perform your MySQL insert operation here
        // For example, let's assume you have a table named 'your_table_name'
        $sql = "INSERT INTO game2 (date, days, `prize_1`, `prize_2`, `prize_3`) VALUES ('value1', 'value2', 'value3')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => true, 'message' => 'Record inserted successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
        }
    }
}

$conn->close();
?>
