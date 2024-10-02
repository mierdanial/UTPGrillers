<?php
$servername = "localhost";
$username = "id21285422_amierdatabase";
$password = "@Rmatur3";
$dbname = "id21285422_amierdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get form data and validate/sanitize
$Name = isset($_POST['Name']) ? trim($_POST['Name']) : '';
$Price = isset($_POST['Price']) ? floatval($_POST['Price']) : 0.0;

// Validate the inputs if needed
if (empty($Name)) {
    die("Invalid input: Name is empty");
}

if (!is_numeric($Price) || $Price <= 0) {
    die("Invalid input: Price is not a valid positive number");
}

// Use prepared statement to prevent SQL injection
$sql = "INSERT INTO Menu (Name, Price) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind parameters and execute the statement
    $stmt->bind_param("sd", $Name, $Price);
    
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
