<!DOCTYPE html>
<html>
<head> <title> Display Customer Orders</title></head>
<link rel="stylesheet" href="style1.css">
<body>
<br>
<br>
<table class="center" style="width:50%">
  <caption style="font-size:3vw; color:lightblue; background-color:salmon;"> List of Customer Order</caption>
  <tr>
    <th>Name</th>
    <th>Table Number</th>
    <th>Chicken Burger</th>
    <th>Beef Burger</th>
    <th>Lamb Burger</th>
    <th>Fish Burger</th>
    <th>Lemon Cola Drink</th>
    <th>Solero Lime Drink</th>
    <th>Banana Milk</th>
    <th>Mineral Water</th>
  </tr>

<?php

    $servername = "localhost";
    $username = "id21285422_amierdatabase";
    $password = "@Rmatur3";
    $dbname = "id21285422_amierdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
$count = 0;
$sql = "SELECT * FROM registrations"; // assuming 'registrations' is the correct table name
$result = $conn->query($sql); // use $conn instead of $db

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $count++;
         echo "<tr>";
         echo "<td>" . $count. "</td>";
         echo "<td>" . $row["name"]. "</td>";
         echo "<td>" . $row["table"]. "</td>";
         echo "<td>" . $row["chickenb"]. "</td>";
         echo "<td>" . $row["beefb"]. "</td>";
         echo "<td>" . $row["lambb"]. "</td>";
         echo "<td>" . $row["fishb"]. "</td>";
         echo "<td>" . $row["coke"]. "</td>";
         echo "<td>" . $row["lime"]. "</td>";
         echo "<td>" . $row["milk"]. "</td>";
         echo "<td>" . $row["water"]. "</td>";
         echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>