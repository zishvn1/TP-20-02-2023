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
// Gets the Mercedes' id  and passes it in the sql query to find the product 

$id=$_GET['id'];
$mercedessql = "SELECT mercedesid,Quantity FROM mercedesproducts WHERE mercedesid =$id";
$mercedes_products = $con->query($mercedessql);
$mercedes_products_row = mysqli_fetch_assoc($mercedes_products);
// If the quantity(stock) of the car is more than 1 the user adds the product to their basket. And a message 'product added to cart' is displayed(technically the messaged is stored in the variable $message to be used later)

$_SESSION['Quantity'] = $mercedes_products_row['Quantity'];
$mercedesid = $mercedes_products_row['mercedesid'];
 if (!isset($Quantity)) {
    $Quantity = count(array_keys($_SESSION['mercedescart'], $mercedesid));
}
	if($Quantity < $_SESSION['Quantity']){
		array_push($_SESSION['mercedescart'], $_GET['id']);
		$message = 'Product added to cart';
		++ $Quantity ;
        
    }else{
                //If the stock is <= 1 then the product is not added to the user's basket and a message 'out of stock' is displayed(technically the messaged is stored in the variable $message to be used later)
        $message ='You cannot add any more to your basket';
    echo"<script>window.alert('Sorry, out of stock')</script>";    
    } 
    //This redirects the user back to the current basket page and the relevant message is displayed to the user
    header("location:CurrentBasket.php?message=".urlencode($message));
?>

</body>

</html>