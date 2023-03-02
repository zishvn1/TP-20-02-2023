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
    <script defer src="CartFunctionality.js"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    <h1 style="padding-top: 5%;"><i class="fa fa-shopping-cart" style="font-size:36px"><?php echo count($_SESSION['cart']); ?>
    </h1>

    <main>
        <?php
        $totalCost = 0;
        if (empty($_SESSION['cart'])) {
            echo 'Shopping cart empty';
        }

        if (!empty($_SESSION['cart'])) {
            $sql = "SELECT * FROM products WHERE id IN (" . implode(',', $_SESSION['cart']) . ")";;
            $all_products = $con->query($sql);
            $index = 0;
            if (!isset($_SESSION['qty_array'])) {
                $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
            } ?>


            <div style="position:absolute; margin-left:15%;">
                <table class="table" cellpadding="100" cellspacing="1" style="margin-left:auto; margin-right:auto;">
                    <tbody>
                        <tr>
                            <th style="text-align:center;">Name</th>
                            <th style="text-align:center;">Unit Price</th>
                            <th style="text-align:center;">Quantity</th>
                            <th style="text-align:center;">Add/Remove</th>
                        </tr> <?php

                                while ($row = mysqli_fetch_assoc($all_products)) {
                                    $id = $row['id']; ?>


                            <tr>
                                <td style="text-align:center;"><?php echo $row['name']; ?></td>
                                <td style="text-align:center;">£<?php echo $row['price']; ?></td>
                                <td style="text-align:center;"><?php echo count(array_keys($_SESSION['cart'], $id)); ?></td>
                                <td style="text-align:center;"> <a href="AddToBasketInBasket.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a>
                                    <a href="DeleteItemFromBasket.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn-close" aria-label="Close"></button></a>
                                </td>
                            </tr>
                    </tbody>




                    <?php $totalCost = $totalCost + $row['price'] * count(array_keys($_SESSION['cart'], $id)) ?>
            </div>
    <?php }


                                // echo 'Total £' . $totalCost;
                            }
    ?>

    <tr>
        <td colspan="2" align="right">Total:</td>
        <td style="align:right"><?php echo '£' . $totalCost; ?></td>
        <td><a href="Checkout.php"><button>Checkout securely</button></a></td>

    </tr>

    </table>
    <div style="float: right;">
        <br> <br>
        <a href="HomePage.php">back</a>
        <br><br>
    </div>
    </main>
    <?php include 'footer.php' ?>

</body>

</html>