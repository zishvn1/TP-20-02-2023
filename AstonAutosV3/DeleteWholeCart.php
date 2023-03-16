<?php 
session_start();
unset($_SESSION['mercedescart']);
unset($_SESSION['audicart']);
header("location:index.php")
?>