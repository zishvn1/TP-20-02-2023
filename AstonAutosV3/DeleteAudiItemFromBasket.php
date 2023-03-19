<?php 
    session_start();
		//remove the id from our cart array
		$key = array_search($_GET['id'], $_SESSION['audicart']);	
		unset($_SESSION['audicart'][$key]);
	 
		//unset($_SESSION['qty_array'][$_GET['index']]);
		//rearrange array after unset
		$_SESSION['qty_array1'] = array_values($_SESSION['qty_array1']);
		header("location:CurrentBasket.php");
?>