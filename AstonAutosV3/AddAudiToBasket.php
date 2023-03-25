<!-- Code by Xavier Walker 210067271 -->
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
// Gets the Audi's id  and passes it in the sql query to find the product 
$id = $_GET['id'];
$audisql = "SELECT audiid,Quantity FROM audiproducts WHERE audiid =$id";
$audi_products = $con->query($audisql);
$audi_products_row = mysqli_fetch_assoc($audi_products);
// If the quantity(stock) of the car is more than 1 the user adds the product to their basket. And a message 'product added to cart' is displayed(technically the messaged is stored in the variable $message to be used later)
// If the  user quantity requst is  greater than or equal to the quantity(stock) of the car is  the user adds the product to their basket. And a message 'product added to cart' is displayed(technically the messaged is stored in the variable $message to be used later)
$_SESSION['AudiQuantity'] = $audi_products_row['Quantity'];
$audiid = $audi_products_row['audiid'];

if (!isset($Quantity)) {
    $Quantity = count(array_keys($_SESSION['audicart'], $audiid));
}
if ($Quantity < $_SESSION['AudiQuantity']) {
    array_push($_SESSION['audicart'], $_GET['id']);
    $message = 'Product added to cart';
    ++$Quantity;
    //If the stock is <= 1 then the product is not added to the user's basket and a message 'out of stock' is displayed(technically the messaged is stored in the variable $message to be used later)
} else {
    $message = 'out of stock';
    echo "<script>window.alert('Sorry, out of stock')</script>";
}
//This redirects the user back to the current basket page and the relevant message is displayed to the user

header("location:products.php?message=" . urlencode($message));
?>

</html>