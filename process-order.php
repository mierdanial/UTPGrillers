<html>
<head> 
    <title>Saving Registration</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "id21285422_amierdatabase";
$password = "@Rmatur3";
$dbname = "id21285422_amierdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$name = $table = $chickenb = $beefb = $lambb = $fishb = $coke = $lime = $milk = $water = $latest_item = '';

$Name = isset($_POST['Name']) ? trim($_POST['Name']) : '';
$Price = isset($_POST['Price']) ? floatval($_POST['Price']) : 0.0;

// Validate the inputs if needed



// Get the form data if available
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['table'])) {
    $table = $_POST['table'];
}
if (isset($_POST['chickenb'])) {
    $chickenb = $_POST['chickenb'];
}
if (isset($_POST['beefb'])) {
    $beefb = $_POST['beefb'];
}
if (isset($_POST['lambb'])) {
    $lambb = $_POST['lambb'];
}
if (isset($_POST['fishb'])) {
    $fishb = $_POST['fishb'];
}
if (isset($_POST['coke'])) {
    $coke = $_POST['coke'];
}
if (isset($_POST['lime'])) {
    $lime = $_POST['lime'];
}
if (isset($_POST['milk'])) {
    $milk = $_POST['milk'];
}
if (isset($_POST['water'])) {
    $water = $_POST['water'];
}

if (isset($_POST['latest_item'])) {
    $latest_item = $_POST['latest_item'];
}

// Validate the form data
$errors = array();
if (empty($name)) {
    $errors[] = 'Name is required.';
}
if (empty($table)) {
    $errors[] = 'Table Number is required.';
}

$newColumnName = str_replace(' ', '_', strtolower($name)); // Use $name instead of $Name
$conn->query("ALTER TABLE registrations ADD COLUMN $newColumnName FLOAT DEFAULT 0");


if (empty($errors)) {
    $stmt = $conn->prepare("INSERT INTO registrations (name, `table`, chickenb, beefb, lambb, fishb, coke, lime, milk, water, $newColumnName) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

 $stmt->bind_param("ssssssssssd", $name, $table, $chickenb, $beefb, $lambb, $fishb, $coke, $lime, $milk, $water, $latest_item);


    if ($stmt->execute()) {
        echo "Registration has been successfully saved";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Validation errors: " . implode(', ', $errors);
}
?>

<?php include 'receipt.php';?>


</body>
</html>
