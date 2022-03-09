<?php
	session_start();
	// if{}
	// else{}
	$_SESSION['message'] = 'You need to login to checkout';
	header('location: view_cart.php');
?>