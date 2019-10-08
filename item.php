<?php
include "header.php";
?>
<?php
$productID = isset($_GET["id"]) ? $_GET["id"] : 1;
$sql = "SELECT * FROM products WHERE p_id = $productID";
$result = mysqli_query($db, $sql);

while($row = mysqli_fetch_array($result)) {
  $prod_id = $row["p_id"];
  $prod_name = $row["p_name"];
  $prod_price = $row["p_price"];
  $prod_brand = $row["p_brand"];
  $prod_type = $row["p_type"];
  $prod_iamge = $row["p_image"];
  $prod_des = $row["p_des"];
  
  ?>
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
          echo '<div class="col-md-12 mb-0"><a href="welcome.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="'.$row['p_brand'].'.php"><strong class="text-black">'.$row['p_brand'].'</strong></a> <span class="mx-2 mb-0">/</span> <strong class="text-black">'.$row['p_name'].'</strong> </div>';
        } else {
          echo '<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="'.$row['p_brand'].'.php"><strong class="text-black">'.$row['p_brand'].'</strong></a> <span class="mx-2 mb-0">/</span> <strong class="text-black">'.$row['p_name'].'</strong> </div>';
        }
        ?>
      </div>
    </div>
  </div>  

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6" data-aos="fade-right">
          <img src="<?php echo $row['p_image'] ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h2 class="text-black"><?php echo $row['p_name']; ?></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore.</p>
          <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p>
          <p><strong class="text-primary h4">$<?php echo $row['p_price'] ?></strong></p>
          <div class="mb-5">
            <form method="post" action="cart.php?action=add&p_id=<?php echo $row['p_id']; ?>">
              <div class="input-group mb-3" style="max-width: 120px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" name="quantity" value="1" size="2" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>
              <p><input type="submit" value="Add to Cart" class="btn btn-sm btn-primary btnAddAction" /></p>
            </form>
            <form method="post" action="wishlist.php?action=add&p_id=<?php echo $row['p_id']; ?>">
              <p><input type="submit" name="quantity" value="Add to Wishlist" class="btn btn-sm btn-default btnAddAction" /></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <?php
}
?>
<br><br><br>


<?php
require "footer.php";
?>