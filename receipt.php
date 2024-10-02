<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
</head>
<body>
    <h1>Receipt</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $table = $_POST['table'];
    ?>
    <p>Name: <?php echo $name; ?></p>
    <p>Table Number: <?php echo $table; ?></p>

    <table>
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Sub Total</th>
        </tr>
        <?php
        // Define an array with item names and corresponding quantities
        $items = array(
            "Chicken Burger" => $_POST['chickenb'],
            "Beef Burger" => $_POST['beefb'],
            "Lamb Burger" => $_POST['lambb'],
            "Fish Burger" => $_POST['fishb'],
            "Lemon Cola Drink" => $_POST['coke'],
            "Solero Lime Drink" => $_POST['lime'],
            "Banana Milk" => $_POST['milk'],
            "Mineral Water" => $_POST['water'],
        );

        // Define prices in PHP to match your JavaScript
        $prices = array(
            "Chicken Burger" => 8.50,
            "Beef Burger" => 9.50,
            "Lamb Burger" => 12.50,
            "Fish Burger" => 9.00,
            "Lemon Cola Drink" => 3.50,
            "Solero Lime Drink" => 3.50,
            "Banana Milk" => 5.00,
            "Mineral Water" => 1.30,
        );
        
        



        $total = 0.0;
        foreach ($items as $item => $quantity) {
            if ($quantity > 0) {
                $price = $prices[$item]; // Retrieve price from the prices array
                $sub_total = $price * $quantity;
                $total += $sub_total;
        ?>
        <tr>
            <td><?php echo $item; ?></td>
            <td><?php echo $quantity; ?></td>
            <td><?php echo "RM " . number_format($sub_total, 2); ?></td>
        </tr>
        <?php
            }
        }
        ?>
        <tr>
            <th colspan="2">TOTAL</th>
            <td><?php echo "RM " . number_format($total, 2); ?></td>
        </tr>
    </table>
    
    <form method="post" action="delete_order.php">
        <input type="submit" name="delete" value="Cancel Order" class="btnDelete">
    </form>

    <?php
    } else {
        echo "No order data found.";
    }
    ?>
</body>
</html>
