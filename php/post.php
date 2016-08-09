<?php
	include("../Classes/Database.php");
	$database = new Database();
	$data = $_POST;
	$file = $_FILES['photo'];
	$filename = rand(111111,999999).".".pathinfo($file['name'],PATHINFO_EXTENSION);
	$moved = move_uploaded_file($file['tmp_name'], "../images/".$filename);
	if(!$moved){
		return "error";
	}
	$data['photo'] = $filename;
	$product = $database->insert("products",$data);
	if($product){
		header("location:../");
	}

?>