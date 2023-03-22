<html lang="en">

<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("navbar.php");
include("footer.php");
$customerId = $_SESSION['id'];
$id = $_GET['id'];
?>
<style>
    th,
    td {
        text-align: center;
        padding: 0 0.8vw;
    }
</style>

<body style="padding-bottom: 20%;">
    
<div style="display:flex;justify-content:center;align-items:center;">
    <h1 style="padding-top: 100px; font-size:4vw;">Orders #<?php echo $id ?></h1> <br><br>
</div> <?php

        $PastOrderssql = "SELECT * FROM orderitems JOIN orders ON orderitems.OrderId = orders.OrderId   WHERE CustomerId = $customerId AND orderitems.OrderId=$id";
        $PastOrder_products = $con->query($PastOrderssql);

        $PastOrderrow = mysqli_fetch_assoc($PastOrder_products);
        ?>

<?php
              $date = $PastOrderrow['OrderTime'];
              $timestamp = date('d-m-Y H:i:s',strtotime($date));

              $cost = $PastOrderrow['TotalCost'];
              $CostFormat = number_format($cost);
            ?>
<div style="display:flex;justify-content:center;align-items:center;padding-bottom:3.5vw;">
    <div class="card">
        <div style="display:flex;justify-content:center;align-items:center;">

            <button onclick="location.href='PastOrders.php'" style="font-size: 1.5vw;">Back to order history</button>
        </div>
        <table style="text-align:left; font-size:2vw;">
            <tr>
                <td><?php echo $timestamp ?></td>
            </tr>
            <tr>
                <td><?php echo $PastOrderrow['Name'] ?></td>
            </tr>
            <tr>
                <td><?php echo $PastOrderrow['Email'] ?></td>
            </tr>
            <tr>
                <td><?php echo $PastOrderrow['Address'] ?></td>
            </tr>
            <tr>
                <td><?php echo $PastOrderrow['Postcode'] ?></td>
            </tr>
            <tr>
                <td><?php echo $PastOrderrow['PaymentMethod'] ?></td>
            </tr>
            <tr>
                <td><?php echo "£" . $CostFormat ?></td>
            </tr>

        </table>
    </div>
</div>
<?php
while ($PastOrderrow = mysqli_fetch_assoc($PastOrder_products)) {

              $cost = $PastOrderrow['Price'];
              $CostFormat = number_format($cost);
?>
    <div style="display:flex;justify-content:center;align-items:center;flex-direction:column;">

        <div class="card" style="border-style:outset; width: 60%;">
            <table class="table" cellpadding="100" cellspacing="1" style="margin-left:auto; margin-right:auto; font-size:2vw">
                <tr>
                    <th>Image</th>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>

                <tr>
                    <td></td>
                    <td style="text-align: left;"><?php echo $PastOrderrow['Make'] . " " . $PastOrderrow['Model']; ?></td>
                    <td><?php echo $PastOrderrow['Quantity'] ?></td>
                    <td><?php echo "£" . $CostFormat ?></td>
                </tr>
            </table>
        </div>
    </div>
<?php

} ?>
<div></div>
</body>

</html>