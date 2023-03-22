<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("navbar.php");
include("footer.php");
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Design for the table that displays the current basket of the user -->
  <style>
    .card {
      /* Add shadows to create the "card" effect */
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      display: flex;
      text-align: center;
      align-items: center;
      align-content: center;
      display: block;
      justify-content: center;
    }

    .card-body {
      font-size: 1.5vw;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    /* Add some padding inside the card container */
    .container {
      padding: 2px 16px;
    }
  </style>
</head>


<body style="padding-bottom: 20%;">
  <h1 style="padding-top: 100px;">Past Orders</h1> <br><br>
  <?php
  $PastOrderssql = "SELECT *,orders.TotalCost FROM orderitems JOIN orders ON orderitems.OrderId = orders.OrderId   WHERE CustomerId = $customerId";
  $PastOrder_products = $con->query($PastOrderssql);

  $CurrentId = null;
  while ($PastOrderrow = mysqli_fetch_assoc($PastOrder_products)) {
    if ($CurrentId != $PastOrderrow['OrderId']) {
      if ($CurrentId != null) {
        echo "</div></div>";
      }
      echo "<div class='card'>";
  ?>
      <?php
      $date = $PastOrderrow['OrderTime'];
      $timestamp = date('d-m-Y H:i:s', strtotime($date));

      $cost = $PastOrderrow['TotalCost'];
      $CostFormat = number_format($cost);


      ?>
      <div class="card-header" style="text-align: left; font-size:2vw;"><?php echo 'Order #' . $PastOrderrow['OrderId'] . ' &nbsp;Order placed ' . $timestamp . '&nbsp' . '&nbsp; Total cost: £' . $CostFormat ?></div>
      <a href="PastOrderView.php?id=<?php echo $PastOrderrow['OrderId'] ?>" style="font-size: 2vw;">View details</a>

    <?php
      $CurrentId = $PastOrderrow['OrderId'];
    }
    // echo"<div class='card-body'>"."<p>".$PastOrderrow['Quantity']."x ".$PastOrderrow['Make']." ".$PastOrderrow['Model']." £".$PastOrderrow['Price']."</p></div>";

    ?> <?php $Unitcost = $PastOrderrow['Price'];
    $UnitCostFormat = number_format($Unitcost); ?>
    <div class="card-body" style="font-size: 1.5vw;"><?php echo $PastOrderrow['Quantity'] . "x " . $PastOrderrow['Make'] . "" . $PastOrderrow['Model'] . " £" . $UnitCostFormat ?></div>

  <?php

  } ?>
</body>




</html>