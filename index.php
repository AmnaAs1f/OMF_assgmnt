<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
</head>
<body>

<h2 style="text-align: center;">Order form</h2>

<form method="post" action="" style="text-align: center;">
    <label for="item">Select an item:</label>
    <select name="item" id="item">
        <option value="burger">Burger - $5.00</option>
        <option value="pizza">Pizza - $10.00</option>
        <option value="sandwich">Sandwich - $7.00</option>
    </select>
    <br><br>
    <label for="quantity">Enter quantity:</label>
    <input type="number" name="quantity" id="quantity" min="1" value="1">
    <br><br>
    <input type="submit" name="calculate" value="Total">
</form>
<div style="text-align: center;">
<?php
if(isset($_POST['calculate'])) {
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];


    $prices = array(
        "burger" => 5.00,
        "pizza" => 10.00,
        "sandwich" => 7.00
    );

    // Calculate total
    if(array_key_exists($item, $prices)) {
        $total = $prices[$item] * $quantity;
        echo "<p>Your total bill for $quantity $item(s) is: $total</p>";
    } else {
        echo "<p>Please select a valid item.</p>";
    }
}
?>
</div>
</body>
</html>
 