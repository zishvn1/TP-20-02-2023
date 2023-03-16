<!--Pantelis Xiourouppas - 160056307 -->
<?php
session_start();
include("connect.php");
//disallows any and all access to this page UNLESS you sign in
if (!isset($_SESSION['id'])) {
    header("Location:adminlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Admin Page</title>

    <style>

    </style>
</head>

<body>
    <?php include 'adminnavbar.php' ?>

    <!-- USERS TABLE -->

    <div class="containerAdminPage">
        <span>
            <h1>Customers Database</h1>
        </span>
        <table class="admin-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password [#hashed#]</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = " SELECT * FROM `customers` ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $phone = $row['phone'];
                        $gender = $row['gender'];
                        echo '
                        <tr>
                      <td scope="row">' . $id . '</td>
                      <td>' . $name . '</td>
                      <td>' . $email . '</td>
                  <div class="change">
                      <td> ' . $password . ' </td>
                    </div>
                      <td>' . $phone . '</td>
                      <td>' . $gender . '</td>

                      <td>                 

                       <a class="button-update" title="Update" href = "userupdate.php? idUpdate= ' . $id . '">Update</a>
                       <a class="button-delete" title="Delete" href = "deleteuser.php? idDelete=' . $id . '">Delete</a>                                           
                       
                      </td>
                      </tr>';
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
    <!-- END OF USERS TABLE -->

</body>

</html>