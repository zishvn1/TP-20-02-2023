<!DOCTYPE html>
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("navbar.php")

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
        <!-- Checkout form where users are required to enter valid details. E.g. name must only contain letters -->
        <form id="WholeForm" style="padding-top: 10%;" method="post">
            <div id="Form">
                <!-- <label for="fname"><i class="fa fa-user"></i></label><br> -->
                <input type="text" name="name" placeholder="Full Name" required><br>
                <!-- <label for="email"><i class="fa fa-envelope"></i></label> -->
                <input type="email" name="billingEmail" placeholder="Email" required>
            </div>
            <div id="boxFull">
                <div id="Form">

                    <!-- <label for="adress"><i class="fa fa-address-card-o"></i> </label> -->
                    <input type="text" name="address" placeholder="Address" required>
                </div>
            </div>

            <div id="Form">
                <!-- <label for="city"><i class="fa fa-institution"></i></label> -->
                <input type="text" name="city" placeholder="City" required pattern="[a-z]{3,}+">
                <input type="text" name="PostCode" placeholder="Postcode" required pattern="[a-zA-Z0-9\s]+">
            </div>

            <div id="boxFull">
                <div id="Form">
                    <input type="text" name="cname" placeholder="Name on card" required pattern="[a-zA-Z\s]+">
                </div>
            </div>

            <div id="Form">
                <input type="text" name="cardnum" placeholder="Card number" required pattern="[0-9]{16}+">
                <input type="text" name="expmonth" placeholder="Exp Month" required pattern="[a-z]{3}+">
            </div>
            <div id="Form">
                <input type="text" name="expyear" placeholder="Exp year" required pattern="[0-9]{4}+">
                <input type="text" name="cvv" placeholder="cvv" required pattern="[0-9]{3}+">
            </div>
            </div>
            <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy; "></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
                <br>

                <input type="submit" value="Continue to checkout" class="btn" name="submitBtn">
        </form>

        <?php
        $totalCost = 0;
        if (empty($_SESSION['cart'])) {
            echo 'Shopping cart empty';
        }

        if (!empty($_SESSION['cart'])) {
            $sql0 = "SELECT * FROM products WHERE id IN (" . implode(',', $_SESSION['cart']) . ")";;
            $all_products = $con->query($sql0);
            $index = 0;
            if (!isset($_SESSION['qty_array'])) {
                $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
            }
        ?>
            <?php
            if (isset($_POST['submitBtn'])) {
                $id = 2;
                $name = $_POST['name'];
                $billingEmail = $_POST['billingEmail'];
                $address = $_POST['address'];
                $debitCardNumber = $_POST['cardnum'];
                $city = $_POST['city'];
                $cardName = $_POST['cname'];
                $postcode = $_POST['PostCode'];
                $expyear = $_POST['expyear'];
                $expmonth = $_POST['expmonth'];
                $cvv = $_POST['cvv'];
                $product = "plswork";
                
                // Submit items from basket into an orders database table 

                while ($row = mysqli_fetch_assoc($all_products)) {
                    $id = $row['id'];
                    $productName = strval($row['name']);
                    $price = (int)$row['price'];
                    $Quantity = count(array_keys($_SESSION['cart'], $id));
                    // $order = "insert into 'carts' (id,name,Quantity,price)
                    //                 values ('$id','$productName','$Quantity','$price')";
                    $order = "INSERT into `carts` (name,Quantity,price)
                    values ('$productName','$Quantity','$price')";
                    $orderResult = mysqli_query($con, $order);

            ?>
                    </div>
                <?php }

                ?>
                        <!-- Submit details entered by user into a billings database table. Then clear the session basket -->
 
                <?php
                    $sql = "insert into `billingdetails` (id,name, billingEmail, nameOnCard, address,debitCardNumber, city,  postcode, expyear, expmonth, cvv, product,productPrice,date) 
                    values('$id','$name','$billingEmail','$cardName','$address','$debitCardNumber','$city','$postcode','$expyear','$expmonth','$cvv','$product','$totalCost',CURRENT_TIME())";
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        echo "<script> alert('Order Has Been Placed');'</script>";
                    } else {
                        die(mysqli_errno($con));
                    }
                    
                    unset($_SESSION['basketItem']);
                    unset($_SESSION['basketPrice']);
                    unset($_SESSION['cart']);
                }
                    ?>
        <?php } ?>

    </main>
    <?php include("footer.php") ?>
</body>

</html>