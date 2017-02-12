<?php
$product_name = $_POST['product_description'];
$marked_price = $_POST['list_price'];
$discount = $_POST['discount_percent'];
$discount_price = ($marked_price * $discount)/100;
$final_price = $marked_price - $discount_price;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><b><?php echo $product_name; ?></b></span><br>

        <label>List Price:</label>
        <span><?php echo "$". $marked_price; ?></span><br>

        <label>Standard Discount:</label>
        <span><i><?php echo $discount."%"; ?></i></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$". $discount_price ; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$". $final_price ; ?></span><br>
    </main>
</body>
</html>
