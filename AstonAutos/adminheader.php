<!DOCTYPE html>
<html lang="en">

<head>
    <style>


    </style>
</head>

<body>

    <div id="navbar">
        <ul>
            <img src="images/logo-removebg.png" class="logo" />
        </ul>
        <ul>
            <li><a href="adminpage.php">Dashboard</a></li>
            <li><a href="#">Inventory Management</a></li>
            <li><a href="#">Customer Enquires</a></li>
            <?php

            if (isset($_SESSION["id"])) {
                echo "<li><a href='adminlogout.php'>Log Out</a></li>";
            } else {
                echo "<li><a href='adminlogin.php'>Log In</a></li>";
            }
            ?>
        </ul>
    </div>

</body>

</html>