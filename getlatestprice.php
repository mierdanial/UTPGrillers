<?php
// Assuming you have a database connection established

// Fetch the latest price from the Menu table in descending order
$query = "SELECT Price FROM Menu ORDER BY YourPrimaryKeyColumn DESC LIMIT 1";
$result = mysqli_query($id21285422_amierdb, $query);

if ($result) {
    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);

    // Get the latest price
    $latestPrice = $row['Price'];

    // Return the latest price as JSON
    echo json_encode(['latestPrice' => $latestPrice]);
} else {
    // Handle the error
    echo json_encode(['error' => 'Unable to fetch latest price']);
}

// Close the database connection
mysqli_close($id21285422_amierdb);
?>
