<!-- Creates/resumes a session based on the session identifier. -->
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("navbar.php");
?>


<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="Styling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="CartFunctionality.js"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Design for the table that displays the current basket of the user -->
    <style>
        .tbl-cart {
            font-size: 0.9em;
        }

        .tbl-cart th {
            font-weight: normal;
        }

        th,
        td,
        tr {
            font-size: 2.5vw;
        }
    </style>
</head>

<body>
    <br><br>
    <br><br>

    <main>
        <!-- Test: User shouldnt and cant checkout if basket is empty -->

        <!-- Sets the basket total to 0 initially and checks if the cart/basket has any items in it.
        If it is empty then a message specifying the cart is empty is displayed -->
       <a href="PastOrders.php">HERE</a>
       <?php    

        if (empty($_SESSION['mercedescart']) && empty($_SESSION['audicart'])) {
        ?><h1 style="padding-left: auto; padding-right:auto; padding-top:8vw; display: flex; justify-content: center; align-items: center; font-size:6vw;"><?php echo 'Your shopping cart is empty'; ?> </h1>
            <i class="fa fa-shopping-bag" style="font-size:20vw; color:rgba(73, 79, 83,0.3);  display: flex; justify-content: center; align-items: center;"></i>
            <br><a style=" display: flex; justify-content: center; align-items: center; font-size:5vw; color:#9c0f0f" href="products.php">Continue shopping</a>
        <?php } else {
            $totalCost = 0;
        ?>
            <div style="position:absolute; margin-left:10%; padding-top:7vw">
                <table class="table" cellpadding="100" cellspacing="1" style="margin-left:auto; margin-right:auto;">
                    <tbody>
                        <tr>
                            <th style="text-align:center;">Make</th>
                            <th style="text-align: center;">Model</th>
                            <th style="text-align:center;">Unit Price</th>
                            <th style="text-align:center;">Quantity</th>
                            <th style="text-align:center;">Add/Remove</th>

                            <?php
                            if (!empty($_SESSION['mercedescart'])) {
                                $mercedessql = "SELECT * FROM mercedesproducts WHERE mercedesid IN (" . implode(',', $_SESSION['mercedescart']) . ")";;
                                $mercedes_products = $con->query($mercedessql);

                                if (!isset($_SESSION['qty_array0'])) {
                                    $_SESSION['qty_array0'] = array_fill(0, count($_SESSION['mercedescart']), 1);
                                } ?>

                                <?php // if (!isset($_SESSION['qty_array1'])) {
                                //$_SESSION['qty_array1'] = array_fill(0, count($_SESSION['audicart']), 1);
                                //} 
                                ?>

                        </tr> <?php
                                while ($mercedesrow = mysqli_fetch_assoc($mercedes_products)) {
                                    $mercedesid = $mercedesrow['mercedesid']; ?>


                            <tr>
                                <td style="text-align:center;"><?php echo $mercedesrow['Make']; ?></td>
                                <td style="text-align: center;"><?php echo $mercedesrow['Model'] ?></td>
                                <td style="text-align:center;">£<?php echo $mercedesrow['price']; ?></td>
                                <td style="text-align:center;"><?php echo count(array_keys($_SESSION['mercedescart'], $mercedesid)); ?></td>
                                <td style="text-align:center;"><a href="AddMercedesItemInBasket.php?id=<?php echo $mercedesrow['mercedesid'] ?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a><a href="DeleteMercedesItemFromBasket.php?id=<?php echo $mercedesrow['mercedesid'] ?>"> <span class="glyphicon glyphicon-minus"></span></button></a>
                                </td>
                            </tr>
                        <?php
                                    $totalCost = $totalCost + $mercedesrow['price'] * count(array_keys($_SESSION['mercedescart'], $mercedesid));
                                }
                            }

                            if (!empty($_SESSION['audicart'])) {
                                $audisql = "SELECT * FROM audiproducts WHERE audiid IN (" . implode(',', $_SESSION['audicart']) . ")";;
                                $audi_products = $con->query($audisql);
                                if (!isset($_SESSION['qty_array1'])) {
                                    $_SESSION['qty_array1'] = array_fill(0, count($_SESSION['audicart']), 1);
                                }
                                while ($audirow = mysqli_fetch_assoc($audi_products)) {
                                    $audiid = $audirow['audiid']; ?>


                            <tr>
                                <td style="text-align:center;"><?php echo $audirow['Make']; ?></td>
                                <td style="text-align: center;"><?php echo $audirow['Model'] ?></td>
                                <td style="text-align:center;">£<?php echo $audirow['price']; ?></td>
                                <td style="text-align:center;"><?php echo count(array_keys($_SESSION['audicart'], $audiid)); ?></td>
                                <td style="text-align:center;"><a href="AddAudiItemInBasket.php?id=<?php echo $audirow['audiid'] ?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a><a href="DeleteAudiItemFromBasket.php?id=<?php echo $audirow['audiid'] ?>"> <span class="glyphicon glyphicon-minus"></span></button></a>
                                </td>
                            </tr>

                    </tbody>

                <?php
                                    $totalCost = $totalCost + $audirow['price'] * count(array_keys($_SESSION['audicart'], $audiid));
                                    $_SESSION['totalCost'] = $totalCost;
                                } ?>


                </tbody>
                <!-- Total cost is calculated and displayed -->
            <?php } ?>
            <tr>
                <td colspan="2" align="right">Total:</td>
                <td style="align:right"><?php echo '£' . $totalCost; ?></td>
                <td><a href="Checkout.php"><button>Checkout securely</button></a></td>

            </tr>
            <tr><a style="font-size: 3vw;" href="DeleteWholeCart.php">Clear Cart</a></tr>
                </table>
            <?php
        }

            ?>


            <div style="float: right;">
    </main>
    <?php include 'footer.php' ?>

</body>

</html>