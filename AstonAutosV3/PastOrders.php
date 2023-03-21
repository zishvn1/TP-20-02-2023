<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("navbar.php");
$customerId = $_SESSION['id'];
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
       .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
    </style>
</head>


<body>
    <br><br><br> <br>
    <h1>Past Orders</h1> <br><br>
    <?php
    $PastOrderssql = "SELECT * FROM orderitems JOIN orders ON orderitems.OrderId = orders.OrderId   WHERE CustomerId = $customerId";
    $PastOrder_products = $con->query($PastOrderssql);

    $CurrentId =null;
    while ($PastOrderrow = mysqli_fetch_assoc($PastOrder_products)) {
        if($CurrentId != $PastOrderrow['OrderId']){
            if($CurrentId !=null){
                echo "</div>";
            }
            echo "<div class='card'>";
            echo " <div class='card-header'>"."<b>Order #".$PastOrderrow['OrderId']; "</b> </div>";

            echo "<h2>".$PastOrderrow['OrderId']."</h2>";
            $CurrentId = $PastOrderrow['OrderId'];
        }
        echo"<p>".$PastOrderrow['Quantity']."x ".$PastOrderrow['Make']." ".$PastOrderrow['Model']." £".$PastOrderrow['Price']."</p>";
        echo"<p> Total cost: £";
?>

        <!-- <div class="card">
            <div class="card-header"> <b><?php echo 'Order #'.$PastOrderrow['OrderId']; ?></b> </div>
            <div class="container">
                <h4><b><?php echo $PastOrderrow['Quantity'].'x '. $PastOrderrow['Make'].' '. $PastOrderrow['Model'];?></b></h4>
                <p><?php echo '£'.$PastOrderrow['Price']; ?></p>
            </div>
        </div> -->
    <?php 
       
    } ?>

</body>




</html>