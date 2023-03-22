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
body {font-family: Arial, Helvetica, sans-serif;}
</style>
</head>
<body>

<?php 
$id=$_GET['id'];
$mercedessql = "SELECT mercedesid,Quantity FROM mercedesproducts WHERE mercedesid =$id";
$mercedes_products = $con->query($mercedessql);
$mercedes_products_row = mysqli_fetch_assoc($mercedes_products);
	if($mercedes_products_row['Quantity']>1){
		array_push($_SESSION['mercedescart'], $_GET['id']);
		$message = 'Product added to cart';
		//echo $_SESSION['message'];
	
 
	
    }else{
        $message ='out of stock';
    echo"<script>window.alert('Sorry, out of stock')</script>";    
    } header("location:products.php?message=".urlencode($message));
?>
</body>
</html>