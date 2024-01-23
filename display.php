<?php
// Check if data is received through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Access individual input values
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $input3 = $_POST['input3'];
    $input4 = $_POST['input4'];
    $input5 = $_POST['input5'];
    $input6 = $_POST['input6'];

    // Modify the data as needed
    // For example, concatenate input1 and input2
    $modifiedData = $input1 . ' ' . $input2;

    // Display the modified data
    echo "<h1>Modified Data</h1>";
    echo "<p>Modified Data: $modifiedData</p>";

    // You can perform other actions or modifications here

} else {
    // Display a message if no data is received
    echo "<h1>No data received</h1>";
}
?>
