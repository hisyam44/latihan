<?php
	session_start();
	if(isset($_GET['product'])){
		if(!in_array($_GET['product'], $_SESSION['cart'])){
			$_SESSION['cart'][] = $_GET['product'];
		}
		header("location:../");
	}elseif(isset($_GET['delete'])){
		if(in_array($_GET['delete'], $_SESSION['cart'])){
			$position = array_search($_GET['delete'], $_SESSION['cart']);
			unset($_SESSION['cart'][$position]);
		}
		header("location:../?page=cart");
	}

?>