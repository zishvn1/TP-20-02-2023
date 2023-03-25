<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");

//Just add this at the top of the product pages Pantelis.
// Code by Xavier Walker(the initalising of the product's cart and search functionality)
//If if cart is empty  reset the cart to an empty array. Then get all the cars' details from the sql query
if (!isset($_SESSION['mercedescart'])) {
    $_SESSION['mercedescart'] = array();
}
unset($_SESSION['mercedesqty_array']);
$mercedessql = "SELECT * FROM mercedesproducts";
$mercedes_products = $con->query($mercedessql);

if (!isset($_SESSION['audicart'])) {
    $_SESSION['audicart'] = array();
}
unset($_SESSION['audiqty_array']);
$audisql = "SELECT * FROM audiproducts";
$audi_products = $con->query($audisql);


if (!isset($_SESSION['vwcart'])) {
    $_SESSION['vwcart'] = array();
}
unset($_SESSION['vwqty_array']);
$vwsql = "SELECT * FROM vwproducts";
$vw_products = $con->query($vwsql);


if (!isset($_SESSION['toyotacart'])) {
    $_SESSION['toyotacart'] = array();
}
unset($_SESSION['toyotaqty_array']);
$toyotasql = "SELECT * FROM toyotaproducts";
$toyota_products = $con->query($toyotasql);

if (!isset($_SESSION['bmwcart'])) {
    $_SESSION['bmwcart'] = array();
}
unset($_SESSION['bmw_array']);
$bmwsql = "SELECT * FROM bmwproducts";
$bmw_products = $con->query($bmwsql);

if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<style>
    body {
        padding-top: 50px;
    }

    h1 {
        text-align: center;
        font-size: 10em;
    }

    .product {
        display: inline-block;
        width: 200px;
        margin: 10px;
        text-align: center;
        border: 1px solid black;
        padding: 10px;
    }

    .product img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .product h2 {
        margin-top: 0;
        font-size: 18px;
    }

    .product p {
        font-size: 16px;
    }
</style>

<body style="padding-bottom: 30%;">
    <?php include 'navbar.php'; ?>

    <h1>Products</h1>
    <!-- Creates a search bar -->
    <form method="POST" action="products.php" class="Form-Container">
        <input class="formInput" type="text" name="criteria" placeholder="Search...">
        <input class="formInput" type="submit" name="search" value="Search" />
        <input class="formInput" type="submit" name="reset" value="Reset" />
        <input type="hidden" name="searched" value="true" />
    </form>

    <?php
// If the search button is pressed it checks all tables for products similar to the entered word
    if (isset($_POST["searched"])) {
        if (isset($_POST["criteria"])) {
            $search = $_POST["criteria"];
            $Audisql = "SELECT * FROM audiproducts WHERE Make LIKE '%{$search}%' or Model LIKE '%{$search}%'";
            $AudiResult = mysqli_query($con, $Audisql);
            $bmwsql = "SELECT * FROM bmwproducts WHERE Make LIKE '%{$search}%' or Model LIKE '%{$search}%'";
            $bmwResult = mysqli_query($con, $bmwsql);
            $mercedessql = "SELECT * FROM mercedesproducts WHERE Make LIKE '%{$search}%' or Model LIKE '%{$search}%'";
            $mercedesResult = mysqli_query($con, $mercedessql);
            $toyotasql = "SELECT * FROM toyotaproducts WHERE Make LIKE '%{$search}%' or Model LIKE '%{$search}%'";
            $toyotaResult = mysqli_query($con, $toyotasql);
            $vwsql = "SELECT * FROM vwproducts WHERE Make LIKE '%{$search}%' or Model LIKE '%{$search}%'";
            $vwResult = mysqli_query($con, $vwsql);


            if (mysqli_num_rows($AudiResult) > 0) {
                while ($row = mysqli_fetch_assoc($AudiResult)) { ?>
                    <div class="vidbox">
                        <div class="card">
                            <div class="caption">

                                <p class="price"><?php echo $row['Make']; ?></p>
                                <p class="price"><?php echo $row['Model']; ?></p>
                                <p class="price">£<?php echo $row['price']; ?></p>
                                <p class="hello"></p>
                            </div>


                            <form method="post" action="AddAudiToBasket.php?action=add&id=<?php echo $row["audiid"]; ?>">
                                <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                                <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                                <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                                <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                            </form>

                        </div>
                    </div>
                <?php }
            }

            if (mysqli_num_rows($bmwResult) > 0) {
                while ($row = mysqli_fetch_assoc($bmwResult)) { ?>
                    <div class="vidbox">
                        <div class="card">
                            <div class="caption">

                                <p class="price"><?php echo $row['Make']; ?></p>
                                <p class="price"><?php echo $row['Model']; ?></p>
                                <p class="price">£<?php echo $row['price']; ?></p>
                                <p class="hello"></p>
                            </div>


                            <form method="post" action="AddBMWToBasket.php?action=add&id=<?php echo $row["bmwid"]; ?>">
                                <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                                <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                                <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                                <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                            </form>

                        </div>
                    </div>
                <?php }
            }


            if (mysqli_num_rows($mercedesResult) > 0) {
                while ($row = mysqli_fetch_assoc($mercedesResult)) { ?>
                    <div class="vidbox">
                        <div class="card">
                            <div class="caption">

                                <p class="price"><?php echo $row['Make']; ?></p>
                                <p class="price"><?php echo $row['Model']; ?></p>
                                <p class="price">£<?php echo $row['price']; ?></p>
                                <p class="hello"></p>
                            </div>


                            <form method="post" action="AddMercedesToBasket.php?action=add&id=<?php echo $row["mercedesid"]; ?>">
                                <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                                <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                                <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                                <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                            </form>

                        </div>
                    </div>
                <?php }
            }
            if (mysqli_num_rows($toyotaResult) > 0) {
                while ($row = mysqli_fetch_assoc($toyotaResult)) { ?>
                    <div class="vidbox">
                        <div class="card">
                            <div class="caption">

                                <p class="price"><?php echo $row['Make']; ?></p>
                                <p class="price"><?php echo $row['Model']; ?></p>
                                <p class="price">£<?php echo $row['price']; ?></p>
                                <p class="hello"></p>
                            </div>


                            <form method="post" action="AddAudiToBasket.php?action=add&id=<?php echo $row["toyotaid"]; ?>">
                                <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                                <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                                <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                                <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                            </form>

                        </div>
                    </div>
                <?php }
            }

            if (mysqli_num_rows($vwResult) > 0) {
                while ($row = mysqli_fetch_assoc($vwResult)) { ?>
                    <div class="vidbox">
                        <div class="card">
                            <div class="caption">

                                <p class="price"><?php echo $row['Make']; ?></p>
                                <p class="price"><?php echo $row['Model']; ?></p>
                                <p class="price">£<?php echo $row['price']; ?></p>
                                <p class="hello"></p>
                            </div>


                            <form method="post" action="AddVWToBasket.php?action=add&id=<?php echo $row["vwid"]; ?>">
                                <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                                <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                                <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                                <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                            </form>

                        </div>
                    </div>
    <?php }
            }
        }
        // If the reset button is pressed select all data. The part below will display every item in the dabtabase
    } elseif (isset($_POST["reset"])) {
        $mercedessql = "SELECT * FROM mercedesproducts";
        $mercedes_products = $con->query($mercedessql);
        $audisql = "SELECT * FROM audiproducts";
        $audi_products = $con->query($audisql);     
        $vwsql = "SELECT * FROM vwproducts";
        $vw_products = $con->query($vwsql);
        $toyotasql = "SELECT * FROM toyotaproducts";
        $toyota_products = $con->query($toyotasql);
        $bmwsql = "SELECT * FROM bmwproducts";
        $bmw_products = $con->query($bmwsql);
    }else{
    ?>

<!-- If nothing is presssed display all items -->

    <?php while ($row = mysqli_fetch_assoc($mercedes_products)) { ?>
        <div class="vidbox">
            <div class="card">
                <div class="caption">

                    <p class="price"><?php echo $row['Make']; ?></p>
                    <p class="price"><?php echo $row['Model']; ?></p>
                    <p class="price">£<?php echo $row['price']; ?></p>
                    <p class="hello"></p>
                </div>


                <form method="post" action="AddMercedesToBasket.php?action=add&id=<?php echo $row["mercedesid"]; ?>">
                    <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                    <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                    <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                    <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                </form>
            </div>
        </div>
    <?php } ?>

    <?php

    while ($row = mysqli_fetch_assoc($audi_products)) { ?>
        <div class="vidbox">
            <div class="card">
                <div class="caption">

                    <p class="price"><?php echo $row['Make']; ?></p>
                    <p class="price"><?php echo $row['Model']; ?></p>
                    <p class="price">£<?php echo $row['price']; ?></p>
                    <p class="hello"></p>
                </div>


                <form method="post" action="AddAudiToBasket.php?action=add&id=<?php echo $row["audiid"]; ?>">
                    <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                    <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                    <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                    <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                </form>

            </div>
        </div>
    <?php } ?>


    <?php while ($row = mysqli_fetch_assoc($vw_products)) { ?>
        <div class="vidbox">
            <div class="card">
                <div class="caption">

                    <p class="price"><?php echo $row['Make']; ?></p>
                    <p class="price"><?php echo $row['Model']; ?></p>
                    <p class="price">£<?php echo $row['price']; ?></p>
                    <p class="hello"></p>
                </div>


                <form method="post" action="AddVWToBasket.php?action=add&id=<?php echo $row["vwid"]; ?>">
                    <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                    <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                    <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                    <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                </form>
            </div>
        </div>
    <?php } ?>



    <?php while ($row = mysqli_fetch_assoc($toyota_products)) { ?>
        <div class="vidbox">
            <div class="card">
                <div class="caption">

                    <p class="price"><?php echo $row['Make']; ?></p>
                    <p class="price"><?php echo $row['Model']; ?></p>
                    <p class="price">£<?php echo $row['price']; ?></p>
                    <p class="hello"></p>
                </div>


                <form method="post" action="AddToyotaToBasket.php?action=add&id=<?php echo $row["toyotaid"]; ?>">
                    <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                    <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                    <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                    <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                </form>
            </div>
        </div>
    <?php } ?>



    <?php while ($row = mysqli_fetch_assoc($bmw_products)) { ?>
        <div class="vidbox">
            <div class="card">
                <div class="caption">

                    <p class="price"><?php echo $row['Make']; ?></p>
                    <p class="price"><?php echo $row['Model']; ?></p>
                    <p class="price">£<?php echo $row['price']; ?></p>
                    <p class="hello"></p>
                </div>


                <form method="post" action="AddBMWToBasket.php?action=add&id=<?php echo $row["bmwid"]; ?>">
                    <input type=hidden name="hiddenProductMake" value="<?php echo $row['Make']; ?>">
                    <input type=hidden name="hiddenProductModel" value="<?php echo $row['Model']; ?>">
                    <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                    <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                </form>
            </div>
        </div>
    <?php } }?>

    <!-- This php block gets the message passed from the url and displays whether a product has been added to the cart or not
    based on the quantity of the item left in stock
    -->
    <?php
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        echo "<script>window.alert('$message')</script>";
    }
    ?>
</body>
<?php include 'footer.php' ?>



</html>