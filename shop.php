<?php
include "header.php";
?>
<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<?php
			if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
				echo '<div class="col-md-12 mb-0"><a href="welcome.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>';
			} else {
				echo '<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>';
			}
			?>
		</div>
	</div>
</div>  

<div class="site-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-3 order-1 mb-5 mb-md-0">
				<div class="border p-4 rounded mb-4">
					<h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
					<ul id="cate" class="list-unstyled mb-0">
						<?php
						$sql = "SELECT * FROM amazon";
						if ($result = mysqli_query($link, $sql)) {
							$rowcount = mysqli_num_rows($result);
							echo '
							<li class="mb-1"><a href="amazonProd" class="d-flex"><span>Amazon</span> <span class="text-black ml-auto">('.$rowcount.')</span></a></li>';
						}
						?>
						<?php
						$sql = "SELECT * FROM apple";
						if ($result = mysqli_query($link, $sql)) {
							$rowcount = mysqli_num_rows($result);
							echo '
							<li class="mb-1"><a href="appleProd" class="d-flex"><span>Apple</span> <span class="text-black ml-auto">('.$rowcount.')</span></a></li>';
						}
						?>
						<?php
						$sql = "SELECT * FROM google";
						if ($result = mysqli_query($link, $sql)) {
							$rowcount = mysqli_num_rows($result);
							echo '
							<li class="mb-1"><a href="googleProd" class="d-flex"><span>Google</span> <span class="text-black ml-auto">('.$rowcount.')</span></a></li>';
						}
						?>
						<?php
						$sql = "SELECT * FROM other";
						if ($result = mysqli_query($link, $sql)) {
							$rowcount = mysqli_num_rows($result);
							echo '
							<li class="mb-1"><a href="otherProd" class="d-flex"><span>Other</span> <span class="text-black ml-auto">('.$rowcount.')</span></a></li>';
						}
						?>
					</ul>
				</div>
			</div>
			<div class="col-md-9 order-2">
				<div class="row">
					<div class="col-md-12 mb-5">
						<div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
						<div class="d-flex">
							<div class="dropdown mr-1 ml-md-auto">
								<!---->
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Filter</button>
								<div id="filter" class="dropdown-menu" aria-labelledby="dropdownMenuReference">
									<form method="post">
										<a class="dropdown-item" href="atoz">Name, A to Z</a>
										<a class="dropdown-item" href="ztoa">Name, Z to A</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="lowtohigh">Price, Low to High</a>
										<a class="dropdown-item" href="hightolow">Price, High to Low</a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="content" class="row mb-5"></div>
			</div>
		</div>
		
	</div>
</div>

<?php
require "footer.php";
?>
</div>
