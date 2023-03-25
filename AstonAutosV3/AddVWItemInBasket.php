<!DOCTYPE html>
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

    <?php
    // Gets the Volkswagen's id  and passes it in the sql query to find the product 
    $id = $_GET['id'];
    $vwsql = "SELECT vwid,Quantity FROM vwproducts WHERE vwid =$id";
    $vw_products = $con->query($vwsql);
    $vw_products_row = mysqli_fetch_assoc($vw_products);
    // If the  user quantity requst is  greater than or equal to the quantity(stock) of the car is  the user adds the product to their basket. And a message 'product added to cart' is displayed(technically the messaged is stored in the variable $message to be used later)
    $_SESSION['vwQuantity'] = $vw_products_row['Quantity'];
    $vwid = $vw_products_row['vwid'];

    if (!isset($Quantity)) {
        $Quantity = count(array_keys($_SESSION['vwcart'], $vwid));
    }
    if ($Quantity < $_SESSION['vwQuantity']) {
        array_push($_SESSION['vwcart'], $_GET['id']);
        $message = 'Product added to cart';
        ++$Quantity;
    } else {
        //If the stock is <= 1 then the product is not added to the user's basket and a message 'out of stock' is displayed(technically the messaged is stored in the variable $message to be used later)
        $message = 'out of stock';
        echo "<script>window.alert('Sorry, out of stock')</script>";
    }
    //This redirects the user back to the current basket page and the relevant message is displayed to the user
    header("location:CurrentBasket.php?message=" . urlencode($message));
    ?>
</body>

</html>