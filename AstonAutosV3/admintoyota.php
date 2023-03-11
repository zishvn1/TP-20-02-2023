<!--Pantelis Xiourouppas - 160056307 -->
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");

/*if (!isset($_SESSION['id'])) 
{
    header("Location:adminlogin.php");
}
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Admin Page</title>

    <style>

    </style>
</head>

<body>
    <?php include 'adminheader.php' ?>
    <div class="containerAdminPage">


        <a href="adminaddcar.php">
            <button class="adminMenuButtons ">Add to Inventory</button>
        </a>
    </div>



    <!-- PRODUCT TABLE -->
    <div class="containerAdminPage">
        <h1 style="color:white;">Product Database</h1>
        <table class="admin-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model </th>
                    <th scope="col">Price</th>
                    <th scope="col">Year</th>
                    <th scope="col">Fuel Type </th>
                    <th scope="col">Color</th>
                    <th scope="col">Break Horse Power</th>
                    <th scope="col">Drive Type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Mileage</th>
                    <th scope="col">Condition of Car</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `toyota` ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $idCart = $row['id'];


                        echo '
                        <tr>
                      <th scope="row">' . $idCart . '</th>
                      <td> <img src="images/' . $image . '"/></d>
                      <td>' . $name . '</td>
                      <td>£' . $price . '</td>  
                      <td>' . $information . '</td>

                      <td>
                      <a class="button-update" title="Relevant Title" href = "productupdate.php? idUpdateCart= ' . $idCart . '">Update</a>
                      <a class="button-delete" title="Relevant Title" href = "deleteproduct.php? idDeleteCart=' . $idCart . '" >Delete</a>
                      
                      </tr>';
                    }
                }

                ?>


            </tbody>
        </table>

    </div>
    <!-- END OF CART TABLE -->

</body>

</html>