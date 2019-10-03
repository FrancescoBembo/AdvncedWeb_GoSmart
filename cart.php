<?php
include "header.php";
?>
<?php
if(isset($_SESSION["cart_item"])){
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
						<a id="btnEmpty" href="cart.php?action=empty"><button class="btn btn-sm btn-default float-right">Empty Cart</button></a>
						<th class="product-name">Product</th>
						<th class="product-thumbnail">Image</th>
						<th class="product-quantity">Qty</th>
						<th class="product-price">Price</th>
						<th class="product-total">Total</th>
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
				<td class="product-quantity" style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td class="product-price" style="text-align:right;"><?php echo "$ ".$item["p_price"]; ?></td>
				<td class="product-total" style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td class="product-remove" style="text-align:center;"><a href="cart.php?action=remove&p_id=<?php echo $item["p_id"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["p_price"]*$item["quantity"]);
		}
		?>
				</tbody>
			</table>
	</div>
	<div class="row">
	  <div class="col-md-6">
		<div class="row mb-5">
		  <div class="col-md-6">
		  	<a href="shop.php"><button class="btn btn-outline-default btn-sm btn-block">Continue Shopping</button></a>
		  </div>
		</div>
		<div class="row">
		  <div class="col-md-12">
			<label class="text-black h4" for="coupon">Coupon</label>
			<p>Enter your coupon code if you have one.</p>
		  </div>
		  <div class="col-md-8 mb-3 mb-md-0">
			<input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
		  </div>
		  <div class="col-md-4">
			<button class="btn btn-primary btn-sm">Apply Coupon</button>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 pl-5">
		<div class="row justify-content-end">
		  <div class="col-md-7">
			<div class="row">
			  <div class="col-md-12 text-right border-bottom mb-5">
				<h3 class="text-black h4 text-uppercase">Cart Totals</h3>
			  </div>
			</div>
			<div class="row mb-3">
			  <div class="col-md-6">
				<span class="text-black">Subtotal</span>
			  </div>
			  <div class="col-md-6 text-right">
				<strong class="text-black"><?php echo "$ ".number_format($total_price, 2); ?></strong>
			  </div>
			</div>
			<div class="row mb-5">
			  <div class="col-md-6">
				<span class="text-black">Total</span>
			  </div>
			  <div class="col-md-6 text-right">
				<strong class="text-black"><?php echo "$ ".number_format($total_price, 2); ?></strong>
			  </div>
			</div>

			<div class="row">
			  <div class="col-md-12">
				<button class="btn btn-primary btn-sm py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
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
						<th class="product-quantity">Qty</th>
						<th class="product-price">Price</th>
						<th class="product-total">Total</th>
						<th class="product-remove">Remove</th>
						</tr>
					</thead>
					<tbody>
						<td colspan="6" style="text-align:center;"><strong style="font-size: 25px;">Your cart is empty</strong></td>
					</tbody>
					
</table>
<a href="shop.php"><button class="btn btn-outline-default btn-sm btn-block">Shop Now</button></a>
</div>
</div>
</div>
<?php 
}
?>
		</div>
	</div>
</div>
<?php
require "footer.php";
?>
