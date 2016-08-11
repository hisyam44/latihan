<?php
	class View{
		public function createProduct(){
			echo '<form method="post" action="php/post.php" enctype="multipart/form-data">				
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
				</form>';
		}

		public function product($product){
						echo '<div class="row">
							<div class="product">
								<div class="col-3 col-sl-6">
									<div class="img">
										<img src="images/'.$product['photo'].'">
									</div>
								</div>	
								<div class="col-9 col-sl-6">
								<div class="product-text">			
									<div class="title">'.$product['name'].'</div>
									<div class="date">Publish On '.$product['published_at'].'</div>
									<div class="price">Harga : Rp.'.$product['price'].'</div>
									<div class="padding-top">
										<a class="btn" href="php/cart.php?product='.$product['id'].'">Masukkan Ke Keranjang</a>
										<a class="btn" href="?product='.$product['id'].'">Details</a>
									</div>
								</div>
								</div>	
							</div>
						</div>';
		}

		public function cart($product){
						echo '<div class="row">
							<div class="product">
								<div class="col-3 col-sl-6">
									<div class="img">
										<img src="images/'.$product['photo'].'">
									</div>
								</div>	
								<div class="col-9 col-sl-6">
								<div class="product-text">			
									<div class="title">'.$product['name'].'</div>
									<div class="date">Publish On '.$product['published_at'].'</div>
									<div class="price">Harga : Rp.'.$product['price'].'</div>
									<div class="padding-top">
										<a class="btn" href="php/cart.php?delete='.$product['id'].'">Delete</a>
									</div>
								</div>
								</div>	
							</div>
						</div>';
		}

		public function productDetails($product){
						echo '<div class="row">
							<div class="product-single">
								<div class="title">'.$product['name'].'</div>
								<div class="date">Published On '.$product['published_at'].'</div>
								<div class="img"><img src="images/'.$product['photo'].'"></div>
								<div class="description">'.$product['description'].'</div>
								<div class="padding-top">
									<a class="btn">Beli</a>
								</div>
							</div>
						</div>';
		}
	}

?>