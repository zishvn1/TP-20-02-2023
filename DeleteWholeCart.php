<?php 
session_start();
unset($_SESSION['mercedescart']);
unset($_SESSION['audicart']);
unset($_SESSION['vwcart']);
unset($_SESSION['toyotacart']);
unset($_SESSION['bmwcart']);
header("location:index.php")
?>