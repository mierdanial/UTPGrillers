<?php
$servername = "localhost";
$username = "id21285422_amierdatabase";
$password = "@Rmatur3";
$dbname = "id21285422_amierdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query to delete the latest order
$sql = "DELETE FROM registrations ORDER BY ID DESC LIMIT 1";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Order succesfully cancelled.";
} else {
    echo "Error deleting order: " . $conn->error;
}


// Close the connection
$conn->close();
?>
<a href="https://amier-workspace.000webhostapp.com/TESTWEB/burgercashier.php">Add New Order</a>

