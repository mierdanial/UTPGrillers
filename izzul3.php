<?php
$servername = "localhost";
$username = "id21285422_amierdatabase";
$password = "@Rmatur3";
$dbname = "id21285422_amierdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MONTH(date) as month, SUM(amount) as total_sales FROM daily_sales GROUP BY MONTH(date)";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Sales</title>
      <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('back.jpg') center/cover no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(255, 165, 0, 0.8), 0 0 5px rgba(255, 165, 0, 0.8);
            color: white;
        }

        table {
            width: 80%;
            margin: 20px auto;
           background-color: rgba(0, 0, 0, 0.8); /* Black with some transparency */
            box-shadow: 0 0 10px rgba(255, 140, 0, 0.8);
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
             background-color: #ff8c00;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td {
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
    if ($result->num_rows > 0) {
        echo "<h2>Monthly Sales</h2>";
        echo "<table><tr><th>Month</th><th>Total Sales</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['month'] . "</td><td>" . $row['total_sales'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No sales data available</p>";
    }

    $conn->close();
    ?>
</body>
</html>
