<!--PANTELIS XIOUROUPPAS - 160056307 -->
<?php

$servername = "localhost";
$username = "u-160056307";
$password = "WVYGb8D9cwqLUGs";
$dbname = "u_160056307_db";

$con = new mysqli($servername, $username, $password, $dbname);
//$con = new mysqli('localhost', 'root', '', 'inventory');

if (!$con) {
    die(mysqli_error($con));
}
?>