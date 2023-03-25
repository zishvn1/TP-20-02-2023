<!-- Code by Xavier Walker -->
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
<?php
// Gets the BMW's id  and passes it in the sql query to find the product 

$id = $_GET['id'];
$bmwsql = "SELECT bmwid,Quantity FROM bmwproducts WHERE bmwid =$id";
$bmw_products = $con->query($bmwsql);
$bmw_products_row = mysqli_fetch_assoc($bmw_products);
// If the  user quantity requst is  greater than or equal to the quantity(stock) of the car is  the user adds the product to their basket. And a message 'product added to cart' is displayed(technically the messaged is stored in the variable $message to be used later)
$_SESSION['bmwQuantity'] = $bmw_products_row['Quantity'];
$bmwid = $bmw_products_row['bmwid'];

if (!isset($Quantity)) {
    $Quantity = count(array_keys($_SESSION['bmwcart'], $bmwid));
}
if ($Quantity < $_SESSION['bmwQuantity']) {
    array_push($_SESSION['bmwcart'], $_GET['id']);
    $message = 'Product added to cart';
    ++$Quantity;
} else {
    //If the stock is <= 1 then the product is not added to the user's basket and a message 'out of stock' is displayed(technically the messaged is stored in the variable $message to be used later)

    $message = 'out of stock';
    echo "<script>window.alert('Sorry, out of stock')</script>";
}
//This redirects the user back to the current basket page and the relevant message is displayed to the user

header("location:products.php?message=" . urlencode($message));
?>

</html>