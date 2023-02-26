<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
unset($_SESSION['qty_array']);
$sql = "SELECT * FROM products";
$all_products = $con->query($sql);
?>


<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="Styling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>

<body>
    <div id=main-header>
        <h1>Home</h1>

    </div>

    <!-- search bar for finding users -->
    <div id="search">
        <form>
            <input type="text" name="name" id="name" placeholder="Search" />
            <button>submit</button>
        </form>
    </div>
    <div id="ShoppingCart">
   <a href="CurrentBasket.php" style="color:black"><i class="fa fa-shopping-cart" style="font-size:36px"> <?php echo count($_SESSION['cart']); ?></i></a>
        

</div><br><br><br>

    <!-- creates a list of every candidate in the database and displays their information -->
    <main>
        <?php while ($row = mysqli_fetch_assoc($all_products)) { ?>
            <div class="vidbox">
                <div class="card">
                    <div class="caption">

                        <p class="price"><?php echo $row['name']; ?></p>
                        <p class="price">£<?php echo $row['price']; ?></p>
                        <p class="hello"></p>
                    </div>


                    <form method="post" action="AddToBasket.php?action=add&id=<?php echo $row["id"]; ?>">
                        <input type=hidden name="hiddenProductName" value="<?php echo $row['name']; ?>">
                        <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                        <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                    </form>

                </div>
            </div>
        <?php } ?>
            
     
    </main>

</body>

</html>