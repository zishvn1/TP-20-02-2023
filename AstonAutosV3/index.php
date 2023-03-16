<?php
session_start();
include("connect.php");
//disallows any and all access to this page UNLESS you sign in
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="image-container">
        <img src="images/indexbmw.png" class="mainimg">
        <div class="image-text-main">
            <p>We Provide <span class="highlight">Luxury Cars</span></p>
            <p>at Low cost.</p>
        </div>
        <div class="image-text-sec">
            <p>SHOP BY BRANDS:</p>
        </div>
        <div class="brands-container">
            <button class="brands">
                <a href="products.php">
                    <img src="images/bmwlogo.png">
                </a>
            </button>
            <button class="brands">
                <a href="products.php">
                    <img src="images/mblogo.png">
                </a>
            </button>
            <button class="brands">
                <a href="products.php">
                    <img src="images/toyotalogo.png">
                </a>
            </button>
            <button class="brands">
                <a href="products.php">
                    <img src="images/vwlogo.png">
                </a>
            </button>
            <button class="brands">
                <a href="products.php">
                    <img src="images/audilogo.png">
                </a>
            </button>
        </div>

        <?php include 'footer.php' ?>

</body>

</html>