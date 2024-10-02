<?php
$servername = "localhost";
    $username = "id21285422_amierdatabase";
    $password = "@Rmatur3";
    $dbname = "id21285422_amierdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = $_POST['date'];
$amount = $_POST['amount'];

$sql = "INSERT INTO daily_sales (date, amount) VALUES ('$date', $amount)";

if ($conn->query($sql) === TRUE) {
    echo "Sale inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
