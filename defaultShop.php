<?php
require "config.php";

$x = 1;
while($x < 54){
	$sql = "SELECT * FROM products WHERE p_id = $x";
	$result = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($result);
	echo '
	<div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
		<div class="block-4 text-center border">
			<figure class="block-4-image">
				<a href="'.$row["p_link"].'"><img src="'.$row["p_image"].'" alt="Image placeholder" class="img-fluid"></a>
			</figure>
			<div class="block-4-text p-4">
				<h3><a href="'.$row["p_link"].'">'.$row["p_name"].'</a></h3>
				<p class="mb-0">'.$row["p_brand"].'</p>
				<p class="text-primary font-weight-bold">$'.$row["p_price"].'</p>
			</div>
		</div>
	</div>';

	$x++;
}
?>