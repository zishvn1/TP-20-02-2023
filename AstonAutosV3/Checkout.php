<!-- code by Xavier Walker 210067271 
    In our project we have multiple databases for products depending on the make of the car e.g. Mercedes, Audi etc.
Due to this a lot of code has to be repeated with different variable names in this php file
-->
<!DOCTYPE html>
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("navbar.php");
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="Styling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        #Form {
            display: flex;
            flex-flow: row wrap;
            align-items: center;
            margin-right: 5px;
        }

        #Form2 {
            display: flex;
            flex-flow: row wrap;
            align-items: center;
            margin-right: 10px;
            padding-left: 2vw;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 40%;
            margin-bottom: 20px;
            padding: 12px;
            margin: 1vw;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type=email] {
            width: 40%;
            margin-bottom: 20px;
            padding: 12px;
            margin: 1vw;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 80%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        span.price {
            float: right;
            color: grey;
        }

        #inline {
            display: inline;
        }

        #boxFull {
            width: 200%;
        }

        #WholeForm {
            margin: auto;
            padding-left: 20vw;
        }

        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <div id=main-header>
        <h1>Home</h1>

    </div>



    </div>
    <br><br>

    <main>
        <!-- The code below Sets a 5 minute timer for the user to either continue the purchase or leave the page.
    If the timer runs out the JS code takes the user to the "UnsetSession.php" file. Which unsets all session variables and destroys the session.
    Which then takes the user login page as they have been effectively signed out -->

    <!-- Feature was added for security reasons-->
        <div id="timer">
            <p style="font-size: 5vw;">05:00</p></div>
            <p style="font-size: 4vw;">Before you are automatically signed out</p>
        <script>
            // Set the countdown date/time to minutes in the future
            var countDownTime = new Date().getTime() + 300000; // 300000 milliseconds = 5 minutes

            // Update the countdown every second
            var x = setInterval(function() {

                // Get the current date/time
                var now = new Date().getTime();

                // Calculate the remaining time
                var distance = countDownTime - now;

                // Calculate minutes and seconds
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Add leading zeros to minutes and seconds
                minutes = (minutes < 10 ? "0" : "") + minutes;
                seconds = (seconds < 10 ? "0" : "") + seconds;

                // Display the countdown timer
                document.getElementById("timer").innerHTML = minutes + ":" + seconds;

                // If the countdown is finished, stop the timer and change file to UnsetSession.php(just unsets and destroys all session variables.)Which in turn signs the user out automatically
                if (distance < 0) {
                    clearInterval(x);
                    window.location.href ="UnsetSession.php";
                }
            }, 1000); // 1000 milliseconds = 1 second
        </script>

        <!-- Checkout form where users are required to enter valid details. E.g. name must only contain letters -->
        <form id="WholeForm" style="padding-top: 10%;" method="post">
            <div id="Form">
                <!-- Name must only contain lowercase/uppercase letters and spaces -->
                <input type="text" name="Name" placeholder="Full Name" required pattern="[a-zA-Z\s]+"><br>
                <input type="email" name="Email" placeholder="Email" required>
            </div>
            <div id="boxFull">
                <div id="Form">

                    <input type="text" name="Address" placeholder="Address" required>
                </div>
            </div>

            <div id="Form">
                <!-- For the city, only letters are allowed. The word must be greater than 3 letters to be valid -->
                <input type="text" name="city" placeholder="City" required pattern="[a-zA-Z]{3,}+">
                <!-- For the postcode a combination of letters and numbers are permitted with spaces -->
                <input type="text" name="Postcode" placeholder="Postcode" required pattern="[a-zA-Z0-9\s]+">
            </div>

            <div id="boxFull">
                <div id="Form">
                    <!-- Name with some parameters. Only letters can be entered and spaces can be entered. No punctuations or symbols or numbers can be entered-->
                    <input type="text" name="cname" placeholder="Name on card" required pattern="[a-zA-Z\s]+">
                </div>
            </div>

            <div id="Form">
                <!-- Selection of payment methods to choose from -->
                <select name="Payment_method" style="width:30vw;">
                    <option value="Card">Card</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Klarna">Klarna</option>
                </select>
            </div>


            <input type="submit" value="Continue to checkout" class="btn" name="submitBtn" style="  background: linear-gradient(135deg, #e6e6e6, #9c0f0f);">
        </form>

        <?php
        // This if statement checks whether or not the user has clicked the submit button.
        // If the user has pressed the submit button. The system gets the data entered  and submits  it into the orders database table
        if (!isset($_SESSION['totalCost'])) {
            $_SESSION['totalCost'] = $totalCost;
        }
        if (isset($_POST['submitBtn'])) {
            $CustomerId = $_SESSION['id'];
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Address = $_POST['Address'];
            $Postcode = $_POST['Postcode'];
            $PaymentMethod = $_POST['Payment_method'];
            $totalCost = $_SESSION['totalCost'];

// Inserts the data gathered from the form above along with the time the button was pressed and the totalcost of the order
// and inserts those values into the database called orders
            $order = "INSERT INTO `orders`(CustomerId,Name,Email,Address,Postcode,PaymentMethod,OrderTime,TotalCost)
                VALUES('$CustomerId','$Name','$Email','$Address','$Postcode','$PaymentMethod',CURRENT_TIME(),'$totalCost')";
            $orderResult = mysqli_query($con, $order);
            $OrderId = mysqli_insert_id($con);

            // First checks if the mercedes cart is not empty. If this returns true, we get all the items in the basket and insert them into the mercedes product database table
            if (!empty($_SESSION['mercedescart'])) {
                $mercedessql = "SELECT * FROM mercedesproducts WHERE mercedesid IN (" . implode(',', $_SESSION['mercedescart']) . ")";;
                $mercedes_products = $con->query($mercedessql);

                if (!isset($_SESSION['mercedesqty_array'])) {
                    $_SESSION['mercedesqty_array'] = array_fill(0, count($_SESSION['mercedescart']), 1);
                }
                while ($mercedesrow = mysqli_fetch_assoc($mercedes_products)) {
                    $mercedesid = $mercedesrow['mercedesid'];
                    $Make = $mercedesrow['Make'];
                    $Model = $mercedesrow['Model'];
                    $Price = $mercedesrow['price'];
                    $Quantity =  count(array_keys($_SESSION['mercedescart'], $mercedesid));
                    // The data from the carts(products user selected) is entered into the orderitems table
                    // The quantity attribute is updated based on how many of the product the user added to their basket
                    $orderItems = "INSERT INTO `orderitems`(OrderId,Make,Model,Quantity,Price)
                VALUES('$OrderId','$Make','$Model','$Quantity','$Price')";
                    $orderItemsResult = mysqli_query($con, $orderItems);
                    $UpdateQuantity = "UPDATE mercedesproducts SET Quantity = Quantity -$Quantity WHERE mercedesid = $mercedesid";
                    $UpdateQuantity_Result = mysqli_query($con, $UpdateQuantity);
                }
            }

            // First checks if the audi cart is not empty. If this returns true, we get all the items in the basket and insert them into the audi product database table

            if (!empty($_SESSION['audicart'])) {
                $audisql = "SELECT * FROM audiproducts WHERE audiid IN (" . implode(',', $_SESSION['audicart']) . ")";;
                $audi_products = $con->query($audisql);

                if (!isset($_SESSION['audiqty_array'])) {
                    $_SESSION['audiqty_array'] = array_fill(0, count($_SESSION['audicart']), 1);
                }
                while ($audirow = mysqli_fetch_assoc($audi_products)) {
                    $audiid = $audirow['audiid'];
                    $Make = $audirow['Make'];
                    $Model = $audirow['Model'];
                    $Price = $audirow['price'];
                    $Quantity =  count(array_keys($_SESSION['audicart'], $audiid));

                    $orderItems = "INSERT INTO `orderitems`(OrderId,Make,Model,Quantity,Price)
                VALUES('$OrderId','$Make','$Model','$Quantity','$Price')";
                    $orderItemsResult = mysqli_query($con, $orderItems);

                    $UpdateQuantity = "UPDATE audiproducts SET Quantity = Quantity -$Quantity WHERE audiid = $audiid";
                    $UpdateQuantity_Result = mysqli_query($con, $UpdateQuantity);
                }
            }
            // First checks if the Volkswagen cart is not empty. If this returns true, we get all the items in the basket and insert them into the Volkwagen product database table

            if (!empty($_SESSION['vwcart'])) {
                $vwsql = "SELECT * FROM vwproducts WHERE vwid IN (" . implode(',', $_SESSION['vwcart']) . ")";;
                $vw_products = $con->query($vwsql);

                if (!isset($_SESSION['vwqty_array'])) {
                    $_SESSION['vwqty_array'] = array_fill(0, count($_SESSION['vwcart']), 1);
                }
                while ($vwrow = mysqli_fetch_assoc($vw_products)) {
                    $vwid = $vwrow['vwid'];
                    $Make = $vwrow['Make'];
                    $Model = $vwrow['Model'];
                    $Price = $vwrow['price'];
                    $Quantity =  count(array_keys($_SESSION['vwcart'], $vwid));

                    $orderItems = "INSERT INTO `orderitems`(OrderId,Make,Model,Quantity,Price)
                VALUES('$OrderId','$Make','$Model','$Quantity','$Price')";
                    $orderItemsResult = mysqli_query($con, $orderItems);

                    $UpdateQuantity = "UPDATE vwproducts SET Quantity = Quantity -$Quantity WHERE vwid = $vwid";
                    $UpdateQuantity_Result = mysqli_query($con, $UpdateQuantity);
                }
            }


            // First checks if the toyota cart is not empty. If this returns true, we get all the items in the basket and insert them into the toyota product database table

            if (!empty($_SESSION['toyotacart'])) {
                $toyotasql = "SELECT * FROM toyotaproducts WHERE toyotaid IN (" . implode(',', $_SESSION['toyotacart']) . ")";;
                $toyota_products = $con->query($toyotasql);

                if (!isset($_SESSION['toyotaqty_array'])) {
                    $_SESSION['toyotaqty_array'] = array_fill(0, count($_SESSION['toyotacart']), 1);
                }
                while ($toyotarow = mysqli_fetch_assoc($toyota_products)) {
                    $toyotaid = $toyotarow['toyotaid'];
                    $Make = $toyotarow['Make'];
                    $Model = $toyotarow['Model'];
                    $Price = $toyotarow['price'];
                    $Quantity =  count(array_keys($_SESSION['toyotacart'], $toyotaid));

                    $orderItems = "INSERT INTO `orderitems`(OrderId,Make,Model,Quantity,Price)
                VALUES('$OrderId','$Make','$Model','$Quantity','$Price')";
                    $orderItemsResult = mysqli_query($con, $orderItems);

                    $UpdateQuantity = "UPDATE toyotaproducts SET Quantity = Quantity -$Quantity WHERE toyotaid = $toyotaid";
                    $UpdateQuantity_Result = mysqli_query($con, $UpdateQuantity);
                }
            }


            // First checks if the bmw cart is not empty. If this returns true, we get all the items in the basket and insert them into the bmw product database table

            if (!empty($_SESSION['bmwcart'])) {
                $bmwsql = "SELECT * FROM bmwproducts WHERE bmwid IN (" . implode(',', $_SESSION['bmwcart']) . ")";;
                $bmw_products = $con->query($bmwsql);

                if (!isset($_SESSION['bmwqty_array'])) {
                    $_SESSION['bmwqty_array'] = array_fill(0, count($_SESSION['bmwcart']), 1);
                }
                while ($bmwrow = mysqli_fetch_assoc($bmw_products)) {
                    $bmwid = $bmwrow['bmwid'];
                    $Make = $bmwrow['Make'];
                    $Model = $bmwrow['Model'];
                    $Price = $bmwrow['price'];
                    $Quantity =  count(array_keys($_SESSION['bmwcart'], $bmwid));

                    $orderItems = "INSERT INTO `orderitems`(OrderId,Make,Model,Quantity,Price)
                VALUES('$OrderId','$Make','$Model','$Quantity','$Price')";
                    $orderItemsResult = mysqli_query($con, $orderItems);

                    $UpdateQuantity = "UPDATE bmwproducts SET Quantity = Quantity -$Quantity WHERE bmwid = $bmwid";
                    $UpdateQuantity_Result = mysqli_query($con, $UpdateQuantity);
                }
            }

        ?>
            </div>
            <?php

            ?>


        <?php
            //Once the information have been submitted into their respected tables
            // The carts are emptied and the user is redirected back to the home page
            unset($_SESSION['mercedescart']);
            unset($_SESSION['audicart']);
            unset($_SESSION['vwcart']);
            unset($_SESSION['toyotacart']);
            unset($_SESSION['bmwcart']);

            echo "<script>window.location.href='index.php';</script>";
        }
        ?>

    </main>
    <?php include("footer.php") ?>
</body>

</html>