<?php

	session_start();
	//unset($_SESSION["username"]);
	session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out</title>
    <link href="css/style.css" rel="stylesheet">
</head>
 <h1>Logged out now! <br/><br/><br/><br/></h1> 
 <p>Would like to log in again? <a href="login.php">Log in</a> </p>
 
 </html>