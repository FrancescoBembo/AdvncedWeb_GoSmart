<?php
require "header.php";
?>
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <?php
      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        echo '<div class="col-md-12 mb-0"><a href="welcome.php">Home</a> <span class="mx-2 mb-0">/</span> Wishlist</div>';
      } else {
        echo '<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> Wishlist</div>';
      }
      ?>
    </div>
  </div>
</div> 
<?php
if(isset($_SESSION["wish_item"])){
	$total_quantity = 0;
	$total_price = 0;
	?>
	<div class="site-section">
		<div class="container">
			<div class="site-blocks-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<br>
							<a id="btnEmpty" href="wishlist.php?action=empty"><button class="btn btn-sm btn-default float-right">Empty Wishlist</button></a>
							<th class="product-name">Product</th>
							<th class="product-thumbnail">Image</th>
							<th class="product-price">Price</th>
							<th class="product-remove">Remove</th>
						</tr>
					</thead>
					<tbody>
						<?php		
						foreach ($_SESSION["cart_item"] as $item){
							$item_price = $item["quantity"]*$item["p_price"];
							?>
							<tr>
								<td class="product-name"><?php echo $item["p_name"]; ?></td>
								<td class="product-thumbnail"><img src="<?php echo $item["p_image"]; ?>" class="img-fluid" /></td>
								<td class="product-price" style="text-align:center;"><?php echo "$ ".$item["p_price"]; ?></td>
								<td class="product-remove" style="text-align:center;"><a href="wishlist.php?action=remove&p_id=<?php echo $item["p_id"]; ?>" class="btnRemoveAction" style="font-size: 25px;"><span class="icon icon-trash icon-2x"></span></a></td>
							</tr>
							
							<?php
							$total_quantity += $item["quantity"];
							$total_price += ($item["p_price"]*$item["quantity"]);
						}
						?>
					</tbody>
				</table>
			</div>
			<?php
		} else {
			?>
			<div class="site-section">
				<div class="container">
					<div class="site-blocks-table">
						<table class="table table-bordered">
							<thead>
								<tr>
									<br>
									<th class="product-name">Product</th>
									<th class="product-thumbnail">Image</th>
									<th class="product-price">Price</th>
									<th class="product-remove">Remove</th>
								</tr>
							</thead>
							<tbody>
								<td colspan="6" style="text-align:center;"><strong style="font-size: 25px;">You don't have any favourite item yet</strong></td>
							</tbody>
							
						</table>
						<a href="shop.php"><button class="btn btn-outline-primary btn-sm btn-block">Shop Now</button></a>
					</div>
				</div>
			</div>
			<?php
		}
		?>
		</div>
	</div>
<?php
require "footer.php";
?>