<?php
	session_start();
	spl_autoload_register(function($class){
		include("Classes/".$class.".php");
	});
	$database = new Database();
	$view = new View();
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
	<title>E-Commerce</title>
</head>
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/css.css">
<body>
<div>
	<div class="center">
	<div class="row">
		<div class="col-6 col-sl-6">
			<div class="panel">
				<div class="panel-heading">
					<div class="panel-title">
						Products
					</div>
				</div>
				<div class="panel-body">
					<?php
						if(isset($_GET['page'])){
							if($_GET['page'] == "create"){
								$view->createProduct();
							}elseif($_GET['page'] == "cart"){
								foreach($_SESSION['cart'] as $id){
									$product = $database->select("*","products","where id = ".$id);
									$product = $product[0];
									$view->cart($product);
								}
							}
						}elseif(isset($_GET['product'])){
							$id = $_GET['product'];
							$products = $database->select("*","products","where id = ".$id);
							$product = $products[0];
							$view->productDetails($product);
						}else{
							?>
						<div clas="row">
							<a href="?page=create" class="btn">Tambah Produk</a>
							<a href="?page=cart" class="btn">Keranjang</a>
						</div>
						<?php
							$products = $database->select("*","products","order by published_at desc");
							foreach($products as $product){
								$view->product($product);
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>