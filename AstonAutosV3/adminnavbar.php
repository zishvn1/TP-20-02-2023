<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <div id="navbar">
        <ul>
            <img src="images/logo-removebg.png" class="logo" />
        </ul>
        <ul>
            <li><a href="adminpage.php">Dashboard</a></li>
            <li><a href="#">Inventory Management</a></li>
            <li><a href="admintoyota.php">Toyota</a></li>
            <li><a href="#">Audi</a></li>
            <li><a href="#">Volkswagen</a></li>
            <li><a href="#">BMW</a></li>
            <li><a href="#">Mercedes Benz</a></li>

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