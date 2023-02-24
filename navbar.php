<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Navbar</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
        }

        #navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: auto;
            background: white;
            border-bottom: 1px solid black;
            z-index: 1;
        }

        #navbar ul {
            list-style-type: none;
            text-align: center;
        }

        #navbar li {
            display: inline-block;
            padding: 15px;
            margin-top: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 20px;
            color: grey;
            margin-right: 10px;
        }

        a:visited {
            text-decoration: none;
            color: grey;
            text-decoration: none;
        }

        .logo {
            max-width: 10%;
            float: left;
        }

        .button1 {
            background-color: #bf1E2E;
            border: none;
            color: #292525;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .button2 {
            background-color: #36454F;
            border: none;
            color: red;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        #navbar li:hover a {
            color: #bf1E2E;
        }

        .button1:hover {
            background-color: #bf1E2E;
            color: white;
        }

        .button2:hover {
            background-color: #36454F;
            color: white;
        }
    </style>
</head>

<body>

    <div id="navbar">
        <ul>
            <img src="images/logo-removebg.png" class="logo" />
        </ul>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="products.php">CARS FOR SALE</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="contactdetails.php">CONTACT US</a></li>
            <li><a href="basket.php">BASKET</a></li>
            <button class="button1" type="button" onclick=window.parent.location.href='login.php' target='_parent'>LOG IN</button>
            <button class="button2" type="button" onclick=window.parent.location.href='signup.php' target='_parent'>SIGN UP</button>
        </ul>
    </div>

</body>

</html>