<?php
	spl_autoload_register(function($class){
		include("Classes/".$class.".php");
	});
	$database = new Database();
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
				<form method="post" action="php/post.php" enctype="multipart/form-data">				
					<div class="form-group">
						<label>Product Name</label>
						<input class="form-control" name="name"></input>
					</div>
					<div class="form-group">
						<label>Price</label>
						<input class="form-control" name="price"></input>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="description" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label>Photo</label>
						<input class="form-control" name="photo" type="file" accept="image/*"></input>
					</div>
					<div class="form-group">
						<label>Publish On</label>
						<input class="form-control" name="published_at" type="date"></input>
					</div>
					<div class="form-group">
						<input type="submit" class="form-control" value="POST"></input>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>