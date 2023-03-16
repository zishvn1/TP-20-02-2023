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

    //check if product is already in the cart

    array_push($_SESSION['audicart'], $_GET['id']);
    $_SESSION['message'] = 'Product added to cart';


    header("location:products.php")
    ?>

</body>

</html>