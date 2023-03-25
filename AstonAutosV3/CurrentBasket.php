<!-- Xavier Walker 210067271 -->
<!-- Based on research and trial & error. This is the best approach I came up with for being able to display
multiple products from differnet tables -->

<!-- Creates/resumes a session based on the session identifier. -->
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("navbar.php");
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
?>
<!-- In order to make the website responsive I used vw(viewpoint) -->
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

        <!-- Sets the basket total to 0 initially and checks if the carts/baskets have any items in it.
        If it is empty then a message specifying the cart is empty is displayed. Else it displays the items the user selected -->
        <a href="PastOrders.php">HERE</a>
        <?php

        if (empty($_SESSION['mercedescart']) && empty($_SESSION['audicart']) &&empty($_SESSION['vwcart'])&& empty($_SESSION['bmwcart']) && empty($_SESSION['toyotacart'])) {
        ?><h1 style="padding-left: auto; padding-right:auto; padding-top:8vw; display: flex; justify-content: center; align-items: center; font-size:6vw;"><?php echo 'Your shopping cart is empty'; ?> </h1>
            <i class="fa fa-shopping-bag" style="font-size:20vw; color:rgba(73, 79, 83,0.3);  display: flex; justify-content: center; align-items: center;"></i>
            <br><a style=" display: flex; justify-content: center; align-items: center; font-size:5vw; color:#9c0f0f" href="products.php">Continue shopping</a>
        <?php } else {
            $totalCost = 0;

        ?>
            <!-- Creates a table with 5 columns -->
            <div style="position:absolute; margin-left:10%; padding-top:3vw">
                <table class="table" cellpadding="100" cellspacing="1" style="margin-left:auto; margin-right:auto;">
                    <tbody>
                        <tr><!--These are the table column names -->
                            <th style="text-align:center;">Make</th>
                            <th style="text-align: center;">Model</th>
                            <th style="text-align:center;">Unit Price</th>
                            <th style="text-align:center;">Quantity</th>
                            <th style="text-align:center;">Add </th>
                            <th style="text-align:center;">Remove</th>

                            <?php
                            // this script checks that the mercedes cart is not empty. If its not, all the items from the mercedes  are selected and displayed in a table.
                            //The table shows the make,model,unit price,quantity of each item. With an option to increase/decrease the quantity
                            // The cost of the all items in the baskets is also calculated and displayed. And the checkout button sends this data to the checkout page
                            //A clear cart option deletes the whole cart and redirects the user back to the home page
                            if (!empty($_SESSION['mercedescart'])) {
                                $mercedessql = "SELECT * FROM mercedesproducts WHERE mercedesid IN (" . implode(',', $_SESSION['mercedescart']) . ")";;
                                $mercedes_products = $con->query($mercedessql);

                                if (!isset($_SESSION['mercedesqty_array'])) {
                                    $_SESSION['mercedesqty_array'] = array_fill(0, count($_SESSION['mercedescart']), 1);
                                } ?>



                        </tr> <?php
                                while ($mercedesrow = mysqli_fetch_assoc($mercedes_products)) {
                                    $mercedesid = $mercedesrow['mercedesid']; ?>


                            <tr>
                                <td style="text-align:center;"><?php echo $mercedesrow['Make']; ?></td>
                                <td style="text-align: center;"><?php echo $mercedesrow['Model'] ?></td>
                                <td style="text-align:center;">£<?php echo $mercedesrow['price']; ?></td>
                                <td style="text-align:center;"><?php echo count(array_keys($_SESSION['mercedescart'], $mercedesid)); ?></td>
                                <td style="text-align:center;"><a href="AddMercedesItemInBasket.php?id=<?php echo $mercedesrow['mercedesid'] ?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a>
                                <td style="text-align:center;"></span></a><a href="DeleteMercedesItemFromBasket.php?id=<?php echo $mercedesrow['mercedesid'] ?>"> <span class="glyphicon glyphicon-minus"></span></button></a>

                            </tr>
                        <?php  
                                // Cost of all mercedes products in mercedes' basket are added to $totalCost
                                    $totalCost = $totalCost + $mercedesrow['price'] * count(array_keys($_SESSION['mercedescart'], $mercedesid));
                                }
                            }

                            // this script checks that the bmw cart is not empty. If its not, all the items from the bmw are selected and displayed in a table.

                            if (!empty($_SESSION['bmwcart'])) {
                                $bmwsql = "SELECT * FROM bmwproducts WHERE bmwid IN (" . implode(',', $_SESSION['bmwcart']) . ")";;
                                $bmw_products = $con->query($bmwsql);

                                if (!isset($_SESSION['bmwqty_array'])) {
                                    $_SESSION['bmwqty_array'] = array_fill(0, count($_SESSION['bmwcart']), 1);
                                } ?>



                        </tr> <?php
                                while ($bmwrow = mysqli_fetch_assoc($bmw_products)) {
                                    $bmwid = $bmwrow['bmwid']; ?>


                            <tr>
                                <td style="text-align:center;"><?php echo $bmwrow['Make']; ?></td>
                                <td style="text-align: center;"><?php echo $bmwrow['Model'] ?></td>
                                <td style="text-align:center;">£<?php echo $bmwrow['price']; ?></td>
                                <td style="text-align:center;"><?php echo count(array_keys($_SESSION['bmwcart'], $bmwid)); ?></td>
                                <td style="text-align:center;"><a href="AddBMWItemInBasket.php?id=<?php echo $bmwrow['bmwid'] ?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a>
                                <td style="text-align:center;"></span></a><a href="DeleteBMWItemFromBasket.php?id=<?php echo $bmwrow['bmwid'] ?>"> <span class="glyphicon glyphicon-minus"></span></button></a>

                            </tr>
                        <?php  
                                // Cost of all bmw products in bmw's basket are added to $totalCost
                                    $totalCost = $totalCost + $bmwrow['price'] * count(array_keys($_SESSION['bmwcart'], $bmwid));
                                }
                            }





                            // this script checks that the toyota cart is not empty. If its not, all the items from the toyota are selected and displayed in a table.
                            if (!empty($_SESSION['toyotacart'])) {
                                $toyotasql = "SELECT * FROM toyotaproducts WHERE toyotaid IN (" . implode(',', $_SESSION['toyotacart']) . ")";;
                                $toyota_products = $con->query($toyotasql);

                                if (!isset($_SESSION['toyotaqty_array'])) {
                                    $_SESSION['toyotaqty_array'] = array_fill(0, count($_SESSION['toyotacart']), 1);
                                } ?>



                        </tr> <?php
                                while ($toyotarow = mysqli_fetch_assoc($toyota_products)) {
                                    $toyotaid = $toyotarow['toyotaid']; ?>


                            <tr>
                                <td style="text-align:center;"><?php echo $toyotarow['Make']; ?></td>
                                <td style="text-align: center;"><?php echo $toyotarow['Model'] ?></td>
                                <td style="text-align:center;">£<?php echo $toyotarow['price']; ?></td>
                                <td style="text-align:center;"><?php echo count(array_keys($_SESSION['toyotacart'], $toyotaid)); ?></td>
                                <td style="text-align:center;"><a href="AddToyotaItemInBasket.php?id=<?php echo $toyotarow['toyotaid'] ?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a>
                                <td style="text-align:center;"></span></a><a href="DeletetoyotaItemFromBasket.php?id=<?php echo $toyotarow['toyotaid'] ?>"> <span class="glyphicon glyphicon-minus"></span></button></a>

                            </tr>
                        <?php  
                                // Cost of all toyota products in toyota's basket are added to $totalCost
                                    $totalCost = $totalCost + $toyotarow['price'] * count(array_keys($_SESSION['toyotacart'], $toyotaid));
                                }
                            }

                            // this script checks that the volkswagen cart is not empty. If its not, all the items from the volkswagen  are selected and displayed in a table.

                            if (!empty($_SESSION['vwcart'])) {
                                $vwsql = "SELECT * FROM vwproducts WHERE vwid IN (" . implode(',', $_SESSION['vwcart']) . ")";;
                                $vw_products = $con->query($vwsql);

                                if (!isset($_SESSION['vwqty_array'])) {
                                    $_SESSION['vwqty_array'] = array_fill(0, count($_SESSION['vwcart']), 1);
                                } ?>



                        </tr> <?php
                                while ($vwrow = mysqli_fetch_assoc($vw_products)) {
                                    $vwid = $vwrow['vwid']; ?>


                            <tr>
                                <td style="text-align:center;"><?php echo $vwrow['Make']; ?></td>
                                <td style="text-align: center;"><?php echo $vwrow['Model'] ?></td>
                                <td style="text-align:center;">£<?php echo $vwrow['price']; ?></td>
                                <td style="text-align:center;"><?php echo count(array_keys($_SESSION['vwcart'], $vwid)); ?></td>
                                <td style="text-align:center;"><a href="AddVWItemInBasket.php?id=<?php echo $vwrow['vwid'] ?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a>
                                <td style="text-align:center;"></span></a><a href="DeleteVWItemFromBasket.php?id=<?php echo $vwrow['vwid'] ?>"> <span class="glyphicon glyphicon-minus"></span></button></a>

                            </tr>
                        <?php  
                                // Cost of all volkswagen products in mercedes' basket are added to $totalCost
                                    $totalCost = $totalCost + $vwrow['price'] * count(array_keys($_SESSION['vwcart'], $vwid));
                                }
                            }




                            // this script checks that the audi cart is not empty. If its not, all the items from the audi  are selected and displayed in a table.
                            if (!empty($_SESSION['audicart'])) {
                                $audisql = "SELECT * FROM audiproducts WHERE audiid IN (" . implode(',', $_SESSION['audicart']) . ")";;
                                $audi_products = $con->query($audisql);
                                if (!isset($_SESSION['audiqty_array'])) {
                                    $_SESSION['audiqty_array'] = array_fill(0, count($_SESSION['audicart']), 1);
                                }
                                while ($audirow = mysqli_fetch_assoc($audi_products)) {
                                    $audiid = $audirow['audiid']; ?>


                            <tr>
                                <td style="text-align:center;"><?php echo $audirow['Make']; ?></td>
                                <td style="text-align: center;"><?php echo $audirow['Model'] ?></td>
                                <td style="text-align:center;">£<?php echo $audirow['price']; ?></td>
                                <td style="text-align:center;"><?php echo count(array_keys($_SESSION['audicart'], $audiid)); ?></td>
                                <td style="text-align:center;"><a href="AddAudiItemInBasket.php?id=<?php echo $audirow['audiid'] ?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a></td>
                                <td style="text-align:center;"></span></a><a href="DeleteAudiItemFromBasket.php?id=<?php echo $audirow['audiid'] ?>"> <span class="glyphicon glyphicon-minus"></span></button></a>
                            </tr>

                    </tbody>

                <?php                                              
                 // Cost of all Audi products in audi' basket are added to $totalCost

                                    $totalCost = $totalCost + $audirow['price'] * count(array_keys($_SESSION['audicart'], $audiid));
                                   //Session variable is initialised and given the value of $totalCost so it can be passed across the website
                                    $_SESSION['totalCost'] = $totalCost;
                                } ?>


                </tbody>
                <!-- Total cost is calculated and displayed -->
            <?php } ?>
            <tr>
                <td colspan="2" align="right">Total:</td>
                <td style="align:right"><?php echo '£' . $totalCost; ?></td>
                <td><a href="Checkout.php"><button style="  background: linear-gradient(135deg, #e6e6e6, #9c0f0f);
color:white;">Checkout securely</button></a></td>

            </tr>
            <tr><a style="font-size: 3vw;" href="DeleteWholeCart.php">Clear Cart</a></tr>
                </table>

            <?php
         //(This is just make sure its 100% set) Session variable is  given the value of $totalCost so it can be passed across the website

            $_SESSION['totalCost'] = $totalCost;
        }

            ?>


            <div style="float: right;">
    </main>
    <?php include 'footer.php' ?>

</body>

</html>