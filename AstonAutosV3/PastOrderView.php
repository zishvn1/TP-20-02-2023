<html lang="en">
<!-- Code by Xavier Walker 210067271 -->
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("navbar.php");
include("footer.php");
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
//gets the users id and stores it in variable $id
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
        //Gets the order the user(that is signed in) clicked and displays the order details and the order items
        $PastOrderssql = "SELECT * FROM orderitems JOIN orders ON orderitems.OrderId = orders.OrderId   WHERE CustomerId = $customerId AND orderitems.OrderId=$id";
        $PastOrder_products = $con->query($PastOrderssql);

        $PastOrderrow = mysqli_fetch_assoc($PastOrder_products);
        ?>

<?php
// Retrieves the data about the order from the order table
              $date = $PastOrderrow['OrderTime'];
              $timestamp = date('d-m-Y H:i:s',strtotime($date));
              $orderStatus = $PastOrderrow['OrderStatus'];
              $cost = $PastOrderrow['TotalCost'];
              //Formats the value to include comments --> makes it easier for the user to read the number
              $CostFormat = number_format($cost);
            ?>
            <!-- Centers the order card -->
<div style="display:flex;justify-content:center;align-items:center;padding-bottom:3.5vw;">
    <div class="card">
        <div style="display:flex;justify-content:center;align-items:center;">
            <!-- Allows the user to go back to all orders made by them -->
            <button onclick="location.href='PastOrders.php'" style="  background: linear-gradient(135deg, #e6e6e6, #9c0f0f);
color:white; font-size: 1.5vw; cursor:pointer;">Back to order history</button>
        </div>
        <!-- displays information about the order. Retrieved from the order table -->

        <table style="text-align:left; font-size:2vw;">
        <tr>
            <td><?php echo $orderStatus ?></td>
        </tr>
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
//Loops through the order orderitems table and displays the products that have the specified order id
while ($PastOrderrow = mysqli_fetch_assoc($PastOrder_products)) {

              $cost = $PastOrderrow['Price'];
              $CostFormat = number_format($cost);
?>
    <div style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
        <!-- Each table row will have its own card style so the user can tell what product information goes where -->
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