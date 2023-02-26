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
    <script defer src="CartFunctionality.js"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <div id=main-header>
        <h1>Home</h1>

    </div>

   
  
    </div>
    <i class="fa fa-shopping-cart" style="font-size:36px"><?php echo count($_SESSION['cart']);?></div> 
    <br><br><br>

    <main>
    <?php 
	$totalCost = 0;
    if(empty($_SESSION['cart'])){
        echo 'Shopping cart empty';
    }
	
        if(!empty($_SESSION['cart'])){
            $sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";;
            $all_products = $con->query($sql);
            $index =0;
            if(!isset($_SESSION['qty_array'])){
                $_SESSION['qty_array'] = array_fill(0,count($_SESSION['cart']),1);
            }
             while ($row = mysqli_fetch_assoc($all_products)) {  $id = $row['id'];?>
                <div class="vidbox">
                    <div class="card">
                        <div class="caption">
    <a href="DeleteItemFromBasket.php?id=<?php echo $row['id']?>"><button type="button" class="btn-close" aria-label="Close"></button></a>
    <a href="AddToBasketInBasket.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-plus" style="color: grey;"></span></a>

                            <p class="price"><?php echo $row['name']; ?></p>
                            <p class="price">£<?php echo $row['price']; ?></p>
                            <p>Quantity: <?php echo count(array_keys($_SESSION['cart'],$id)); ?></p>
                            <?php $totalCost = $totalCost + $row['price'] * count(array_keys($_SESSION['cart'],$id))?>
                        </div>
    
    
                    </div>
                </div>
            <?php } 
      echo 'Total £'.$totalCost;    }
			?>
                        

<br> <br>
            <a href="DeleteWholeCart.php">Delete Whole Cart</a><br><br>
            <a href="HomePage.php">back</a>
            <br><br>
            <a href="HomePage.php"><button disabled id="Checkout">Checkout securely</button></a>

    </main>

</body>
<script>
    <?php 
        if(count($_SESSION_['cart']) > 0){
       ?>    document.getElementById("Checkout").disabled = false; 
        <?php } ?>
    
</script>
</html>