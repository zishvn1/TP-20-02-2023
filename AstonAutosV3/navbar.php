<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

</head>

<body>

    <div id="navbar">
        <ul>
            <img src="images/logo-removebg.png" class="logo" />
        </ul>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="filterNew.php">CARS FOR SALE</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="contactUsNew.php">CONTACT US</a></li>
            <li><a href="Currentbasket.php">BASKET</a></li>
            <?php

            if (isset($_SESSION["id"])) {
                echo "<li><a href='logout.php'>Log Out</a></li>";
            } else {
                echo "<li><a href='login.php'>Log In</a></li>";
            }
            ?>
        </ul>
    </div>