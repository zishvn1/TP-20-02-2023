<!DOCTYPE html>
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");

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

        body{
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <div id=main-header>
        <h1>Home</h1>

    </div>



    </div>
    <i class="fa fa-shopping-cart" style="font-size:36px"><?php echo count($_SESSION['cart']); ?></div>
        <br><br>

        <main>
            <form id="WholeForm" action="/action_page.php">
                        <div id="Form">
                            <!-- <label for="fname"><i class="fa fa-user"></i></label><br> -->
                            <input type="text" id="fname" placeholder="Full Name"><br>
                            <!-- <label for="email"><i class="fa fa-envelope"></i></label> -->
                            <input type="text" id="email" placeholder="Email">
                        </div>
                        <div id="boxFull">
                            <div id="Form">

                                <!-- <label for="adress"><i class="fa fa-address-card-o"></i> </label> -->
                                <input type="text" id="address" placeholder="Address">
                            </div>
                        </div>

                        <div id="Form">
                            <!-- <label for="city"><i class="fa fa-institution"></i></label> -->
                            <input type="text" id="city" placeholder="City">
                            <input type="text" id="PostCode" placeholder="Postcode">
                        </div>
                
                    <div id="boxFull">
                        <div id="Form">
                        <input type="text" id="cname" placeholder="Name on card">
                    </div></div>

                    <div id="Form">
                        <input type="text" id="cardnum" placeholder="Card number">
                        <input type="text" id="expmonth" placeholder="Exp Month">
                    </div>
                            <div id="Form">
                                <input type="text" id="expyear" placeholder="Exp year">
                                <input type="text" id="cvv" placeholder="CVV">
                            </div>
                        </div>
                        <div class="icon-container">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                        <br>
                      
                <input type="submit" value="Continue to checkout" class="btn">
                <button>Back</button>
            </form>
        </main>

</body>

</html>