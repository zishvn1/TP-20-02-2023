<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Navbar</title>
    <style type="text/css">

        *{
            padding: 0;
            margin: 0;
        }

        #navbar {
            width: 100%;
            background: #bf1E2E;
        }

        #navbar ul{
            list-style-type: none;
            text-align: right;
        }

        #navbar li{
            display: inline-block;
            padding: 10px;
            font-size: 20px;
            color: black !important;
        }

        a:visited { 
            text-decoration: none; 
            color: black !important; 
        }
        
    </style>
</head>

<body>
    <div id="navbar">
        <ul>
            <li>Aston Autos</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactdetails.php">Contact Details</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="basket.php">Basket</a></li>
        </ul>
    </div>

</body>

</html>